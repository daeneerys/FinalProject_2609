<?php
include_once "header.php";
if(isset($_POST['submit'])) {

    header("Location: reg_successful.php");
    exit(); 
}
?>
<!DOCTYPE html>

<head>
    <html lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reg_successful.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="js/success.js"></script>
</head>

<body>
    <div class="successful_container">
        <div>
            <h1>
                Congratulations! You Have successfully registered. <br>
                Please login again.
            </h1>
        </div>
        <div>
            <a href="login.php"><button>LOGIN</button></a>
        </div>
    </div>
</body>

</html>