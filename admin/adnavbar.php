<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/x-icon" href="./assets/bb.ico">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <script src="navbar.js"></script>
    <style>
        body {
            padding-top: 0px; 
            background-color: white; 
            color: white; 
        }
        .container {
            margin-top: 0px; 
        }
        .navbar-nav {
            margin-left: auto; 
        }
        .navbar-brand {
            padding: 0;
        }
        .navbar-brand img {
            height: 30px; 
            width: auto; 
            max-width: 100px; 
        }
    </style>
</head>
<body>
    <!-- Main Navigation -->
    <nav id="main-navbar" class="navbar navbar-expand-sm box-shadow bg-light grey-background">
        <div class="container-fluid" style="background-color: lightgrey">
            <a class="navbar-brand" href="https://www.ust.edu.ph/" target="_blank">
            <img src="assets\R.png" alt="Logo 1">
            </a>
            <a class="navbar-brand" href="https://www.ust.edu.ph/information-and-computing-sciences/" target="_blank">
            <img src="assets\UST-CICS.png" alt="Logo 2">
            </a>
            <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="dashboard.php">Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="adlogout.php">Logout</a>
            </li>
            </ul>
    </div>
    </nav>
</body>
</html>
