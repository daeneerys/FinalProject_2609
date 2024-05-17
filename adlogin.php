<?php 
session_start();

$is_invalid = false;

if (isset($_POST["login"])) {
    require __DIR__ . "/adaccounts.php";
    
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $pass = $_POST['pass'];
    
    $stmt = $conn->prepare("SELECT * FROM administrators_tb WHERE email = :email");
    $stmt->bindParam(':email', $email);
    
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if ($user && password_verify($pass, $user['pass'])) {
        session_regenerate_id(true);
        
        $_SESSION['user'] = $user['id'];
        $_SESSION['email'] = $user['email'];
        
        header("Location: dashboard.php");
        exit;
    } else {
        $is_invalid = true;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-image: url('assets/adFrassati.jpg');
            background-size: cover; 
            background-position: center;
            background-repeat: no-repeat; 
        }
        .login-container {
            max-width: 600px;
            width: 100%;
            padding: 50px;
            background-color: #F8F0C6;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-control {
            border-radius: 5px;
        }
        .btn-login {
            width: 100%;
            background-color: honeydew;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 15px;
            cursor: pointer;
        }
        .btn-login:hover {
            background-color: burlywood;
        }
        .btn {
            background-color: #510400;
            font-family: Montserrat, sans-serif;
            font-weight: 550;
            font-size: 17px;
        }
        .featuredText {
            font-family: Inter, sans-serif;
            font-weight: 800;
            font-size: 45px;
            color: #950014;
            line-height: 1;
            margin-bottom: 20px;
            text-align: center;
        }
        .featuredsubtext {
            font-family: Montserrat, sans-serif;
            font-weight: 550;
            font-size: 16px;
            color: #000000;
            line-height: 1.5;
            margin-bottom: 20px;
        }
        .alert {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2 class="featuredText">ADMIN LOGIN</h2>
        <?php if ($is_invalid): ?>
            <div class="alert alert-danger">Invalid email or password</div>
        <?php endif; ?>
        <form method="post">
            <div class="featuredsubtext form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="featuredsubtext form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="pass" required>
            </div>
            <button type="submit" class="btn btn-login" name="login">Login</button>
        </form>
    </div>
</body>
</html>
