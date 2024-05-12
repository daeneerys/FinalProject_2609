<?php include_once('header.php');
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

    </div>



    <div class="container-fluid text-center">
        <div class="row">
            <div class="col-md-3 mx-5 mb-3"></div>
            <h1 class="featuredText"><br><br>Featured Organizations</h1>
            <p class="featuredsubtext">Explore the CICS thriving community – providing students with opportunities<br> to develop leadership skills, cultivate interests, and connect with like-minded peers<br><br></p>
        </div>
    </div>

    <section class="featured_carousel">
    <div class="featured_container">

    <?php
    // Define the featured items
        $featured_items = array(
            array("./assets/Cnag.jpg", "UST Cisco Networking Academy Gateway - CICS Unit"),
            array("./assets/Comelec.jpg", "UST ICS Comission on Electronics"),
            array("./assets/Css.jpg", "UST Computer Science Society"),
            array("./assets/Iss.jpg", "UST - Information Systems Society"),
            array("./assets/Pax.jpg", "UST Pax Romana - ICS Unit"),
            array("./assets/Site.jpg", "UST SITE - CICS: Society of Information Technology Enthusiasts"),
            array("./assets/Tgs.jpg", "UST Thomasian Gaming Society")
    );

    // Loop 
    foreach ($featured_items as $item) {
    // check if logged in
    $href = isset($_SESSION['user']) ? 'organization.php' : 'login.php';
    // Output the featured item
        echo "<div class=\"featured_item\">\n";
        echo "<a href=\"$href\">\n";
        echo "<img class=\"carousel_image\" src=\"" . $item[0] . "\">\n";
        echo "<div class=\"overlay\">\n";
        echo "<p class=\"overlay-text\">" . $item[1] . "</p>\n";
        echo "</div>\n";
        echo "</a>\n";
        echo "</div>\n";
    }
        ?>

    </div>
    </section>

   
    <hr style="border: none; border-top: 1px solid rgba(255, 0, 0, 0.3); height: 1px; box-shadow: 0 2px 4px rgba(255, 0, 0, 0.4);">

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