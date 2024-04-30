<?php
$is_invalid = false;

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}


if (isset($_POST["login"])) {
    $conn = require __DIR__ . "/accounts.php";
    $email = $_POST["email"];
    $pass = $_POST["pass"];

    require_once "accounts.php";
    $stmt = $conn->prepare("SELECT * FROM account WHERE email = '$email'");

    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user) {

        if (password_verify($_POST["pass"], $user["pass"])) {

            session_regenerate_id();

            $_SESSION['user'] = $user['id'];
            $_SESSION['firstname'] = $user['firstname'];
            $_SESSION['lastname'] = $user['lastname'];
            $_SESSION['sex'] = $user['sex'];
             $_SESSION['email'] = $user['email'];
            $_SESSION['studentid'] = $user['studentid'];
            $_SESSION['degreeprogram'] = $user ['degreeprogram'];

            header("Location: index.php");
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
    <link rel="stylesheet" href="css/login.css">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>CICS Organization</title>
</head>

<body>

    <div class="row container-fluid login_main">
        <div class="col-6 col-md-6 login_first">
            <img src="assets/UST-CICS.png">
            <p>UST - COLLEGE OF INFORMATION AND COMPUTING SCIENCE</p>
        </div>
        <div class="col-6 col-md-6 login_second">
            <div class="login_second_child">
                <div class="form-group">
                    <form method="post">
                        <p class="loginLabel">Email: </p>
                        <input class="loginField" type="email" name="email" placeholder="Email Address" value="<?= htmlspecialchars($_POST["email"] ?? "") ?>">
                        <p class="loginLabel">Password: </p>
                        <input class="loginField" type="password" name="pass" placeholder="Enter Your Password" required>

                </div>
            </div>
            <button class="submit" type="submit" name="login">Login</button>
            <p class="noAcc">Don't Have an Account? <a href="register.php">Create One</a></p>
            </form>
        </div>

        
    </div>
</body>

</html>