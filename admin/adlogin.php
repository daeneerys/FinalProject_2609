<?php 
    $is_invalid = false;

    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    if (isset($_POST["login"])) {
        $conn = require __DIR__ . "/adaccounts.php";
        $email = $_POST["email"];
        $pass = $_POST["pass"];
    
        require_once "adaccounts.php";
        $stmt = $conn->prepare("SELECT * FROM administrators_tb WHERE email = '$email'");
    
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
    
        if ($user) {
    
            if (password_verify($_POST["pass"], $user["pass"])) {
    
                session_regenerate_id();
    
                $_SESSION['user'] = $user['id'];
                $_SESSION['email'] = $user['email'];

                header("Location: dashboard.php");
            } else {
                echo "<div class = 'alert alert-danger'>Invalid Password</div>";
            }
    
            $is_invalid = true;
        } else {
            echo "<div class = 'alert alert-danger'>Invalid Email</div>";
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
            background-color: #f0f0f0;
            font-family: Arial, sans-serif;
        }
        .login-container {
            max-width: 400px;
            margin: auto;
            margin-top: 100px;
            padding: 20px;
            background-color: #fff;
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
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px;
            cursor: pointer;
        }
        .btn-login:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2 class="text-center mb-4">LOGIN</h2>
        <form method = "post">
            <div class="form-group">
                <label for="username">Email:</label>
                <input type="text" class="form-control" id="username" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="pass" required>
            </div>
            <button type="submit" class="btn btn-login" name = "login">Login</button>
        </form>
    </div>
</body>
</html>