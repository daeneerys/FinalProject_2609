<?php include_once ('header.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CICS ORGANIZATION</title>
    <link rel="shortcut icon" type="image/x-icon" href="./assets/bb.ico">
    <link rel="stylesheet" href="css/index.css">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <script src="index.js" defer></script>

</head> 

<body>
    <!--carousel fade -->
<div id="mainCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="./assets/CICSWEEK1.JPG" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="./assets/CICSWEEK2.JPG" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="./assets/CICSWEEK3.JPG" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="./assets/CICSWEEK4.JPG" class="d-block w-100" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#mainCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#mainCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>



<!-- red container -->
<div class="container-fluid redcontainer">
    <!-- 4 containers -->
    <div class="row">
        <div class="col-md-3 mx-5 mb-3">
            <!-- Column 1 -->
            <br><img src="./assets/stat1.png" class="img-fluid uniform-img" alt="...">
        </div>
        <div class="col-md-3 mx-5 mb-3">
            <!-- Column 2 -->
            <br><img src="./assets/stat2.png" class="img-fluid uniform-img" alt="...">
        </div>
        <div class="col-md-3 mx-5 mb-3">
            <!-- Column 3 -->
            <br><img src="./assets/stat3.png" class="img-fluid uniform-img" alt="...">
        </div>
        <div class="col-md-3 mx-5 mb-3">
            <!-- Column 4 -->
            <br><img src="./assets/stat4.png" class="img-fluid uniform-img" alt="...">
        </div>
    </div>
</div>



    <div class="container-fluid text-center">
        <div class="row">
            <div class="col-md-3 mx-5 mb-3"></div>
            <h1 class="featuredText"><br><br>Featured Organizations</h1>
            <p class="featuredsubtext">Explore the CICS thriving community – providing students with opportunities<br> to develop leadership skills, cultivate interests, and connect with like-minded peers<br><br></p>
        </div>
    </div>

    <!-- Featured Organizations Pictures-->
    <div class="container-md text-center" id='featured'>
    <div class="row">
        <div class="col-md-4 mx-2 mb-3 img-container">
            <!-- Column 1 -->
            <a href="organization.php">
                <div class="image-wrapper">
                    <img class="img-fluid" src="./assets/Cnag.jpg" alt="First Featured Photo">
                    <div class="overlay">
                        <p class="overlay-text">UST Cisco Networking Academy Gateway - CICS Unit</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4 mx-2 mb-3 img-container">
            <!-- Column 2 -->
            <a href="organization.php">
                <div class="image-wrapper">
                    <img class="img-fluid" src="./assets/Tgs.jpg" alt="Second Featured Photo">
                    <div class="overlay">
                        <p class="overlay-text"> UST Thomasian Gaming Society</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4 mb-2 mb-3 img-container">
            <!-- Column 3 -->
            <a href="organization.php">
                <div class="image-wrapper">
                    <img class="img-fluid" src="./assets/Site.jpg" alt="Third Featured Photo">
                    <div class="overlay">
                        <p class="overlay-text">UST Society of Information Technology Enthusiasts</p>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>

    <br>

    <!--Mission & Vision -->
    <div class="container-fluid text-center">
        <div class="row">
            <div class="col-md-6">
            <h1 class="featuredText"><br><br>Vision</h1>
            <p>The Institute of Information and Computing Sciences envisions itself as a premier and innovative institution in Information Technology Education and research in the Asia-Pacific Region.</p>
        </div>
        <div class="col-md-6">
            <h1 class="featuredText"><br><br>Mission</h1>
            <p>The Institute of Information and Computing Sciences of the University of Santo Tomas, under the inspiration of its model, Saint Thomas Aquinas, and its patron, Saint Vincent Ferrer, declares its commitment to the pursuit of truth and the formation of technically competent ITE professionals endowed with a strong commitment to lifelong learning, social responsibility and a desire for leadership in the spirit of service in their respective fields of specialization.</p>
        </div>
        </div>
    </div>

    <!--Location -->

    <div class="container-fluid text-center">
        <p class="loc_title">Location
        <p>
    </div>
    <div class="div-12">
        <div class="div-13">
            <div class="container-fluid column">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3860.8324517163983!2d120.98958457510636!3d14.608618585878679!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c9ba1de029e7%3A0xdfba8380a7b4eee4!2sUST%20Blessed%20Pier%20Giorgio%20Frassati%20Building!5e0!3m2!1sen!2sph!4v1712293967585!5m2!1sen!2sph" height="650px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </div>
    </div>
    <?php include_once 'footer.php'; ?>
</body>
<!-- bootstrap js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>