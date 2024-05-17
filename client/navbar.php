<?php include "session.php"; 
    $loggedIn = false;

    if (isset($_SESSION['user'])) {
        $loggedIn = true;
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/x-icon" href="./assets/bb.ico">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <script src="navbar.js"></script>
</head>

<body>
    <header>
        <!-- Upper Left Navbar -->
        <nav class="navbar navbar-expand-sm box-shadow fixed-top">
            <div class="upper_left container-fluid">
                <div class="left_content">
                </div>
            </div>
        </nav>
        
        <div class="upper_right container-fluid">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script type="text/javascript">
            var timestamp = '<?= time(); ?>';
            function updateTime() {
                $('#time').html(Date(timestamp));
                timestamp++;
            }
            $(function() {
                setInterval(updateTime, 1000); // Adjust interval as needed (e.g., every second)
            });
        </script>
        </div>

        <!-- Lower Navbar -->
        <nav class="navbar navbar-expand-sm navbar-toggleable-sm mt-2 fixed-top" id='navbar'>
            <div class="lower_container container-fluid">
                <a class="navbar-brand" href="https://www.ust.edu.ph/information-and-computing-sciences/">
                    <img class="cicsLogo" src="assets/UST-CICS.png" alt="CICS">
                </a>
                <p>College of Information and Computing Science</p>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse  container_links  d-sm-inline-flex justify-content-between" id="navbarNavAltMarkup">
                    <ul class="navbar-nav flex-grow-1 justify-content-end">
                        <li class="nav-item">
                            <a class="link nav-link" href="index.php">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="link nav-link" href="organization.php">ORGANIZATIONS</a>
                        </li>
                        <li class="nav-item">
                            <a class="link nav-link" href="about.php">ABOUT</a>
                        </li>
                        <?php if($loggedIn){ ?>
                            <li class = "nav-item"> 
                                <a class = "link nav-link" href="profile.php">MY PROFILE</a>
                            </li>
                        <?php } ?> 
                    </ul> 
                </div>

                <?php if ($loggedIn) { ?>
                    <a href = "logout.php">
                    <button class = "rounded-pill">LOGOUT</button>
                    </a>
                <?php } else { ?>
                    <a href="login.php">
                        <button class="rounded-pill">LOGIN</button>
                    </a>
                <?php }
                ?>

            </div>
        </nav>
    </header>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>