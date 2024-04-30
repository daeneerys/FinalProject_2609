<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/footer.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Footer</title>
</head>

<body>
<footer>
    <div class="container-fluid up-footer">
        <div class="row">
            <div class="col-md-3 mb-1 ms-2">
                <!-- Column 1 -->
                <img class="logo img-fluid" src="assets/UST-CICS.png" />
            </div>
            <div class="col-md-2 mb-1 ms-5">
                <!-- Column 2 -->
                <br>
                <h4 class="footerTopText text-start">Information</h4>
                    <p class="text-start"><a class="footerSubText" href="index.php#featured">Featured Organization</a></p>
                    <p class="text-start"><a class="footerSubText" href="organization.php">Organizations</a></p>
                    <p class="text-start"><a class="footerSubText" href="about.php#mission">Mission</a></p>
                    <p class="text-start"><a class="footerSubText" href="about.php#vision">Vision</a></p>
                    <p class="text-start"><a class="footerSubText" href="about.php#touch">Get In Touch</a></p>
            </div>
            <div class="col-md-2 mb-1 ms-3">
                <!-- Column 3 -->
                <br>
                <h4 class="footerTopText text-start">Organizations</h4>
                <p class="text-start"><a class="footerSubText" href="courses.php">CNAG - CICS</a></p>
                <p class="text-start"><a class="footerSubText" href="courses.php">COMELEC - CICS</a></p>
                <p class="text-start"><a class="footerSubText" href="courses.php">Computer Science Society</a></p>
                <p class="text-start"><a class="footerSubText" href="courses.php">Information Systems Society</a></p>
                <p class="text-start"><a class="footerSubText" href="courses.php">Pax Romana - CICS</a></p>
                <p class="text-start"><a class="footerSubText" href="courses.php">SITE - CICS</a></p>
                <p class="text-start"><a class="footerSubText" href="courses.php">The Thomasian Gaming Society</a></p>
            </div>
            <div class="col-md-4 mb-1 ms-5">
                <!-- Column 4 -->
                <br><h4 class="cicsFooter text-start">UST - College of Information and Computing Science</h4>
                <div class="row">
                    <div class="col-sm-1">
                        <i style = "font-size:25px"  class = "fa">&#xf041;</i>
                    </div>
                    <div class="col-sm-11">
                        <p class="smallestText">2nd Floor Blessed Pier Giorgio Frassati O.P., Building 1008<br>España Blvd, Sampaloc, Manila, 1000 Metro Manila</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-1">
                        <i style = "font-size:25px" class = "fa">&#xf095;</i>
                    </div>
                    <div class="col-sm-11">
                        <p class="smallestText">+63-2-3406-1611 local 8518</p>
                    </div>
                </div>

                <h4 class="bbFooter text-start">Reach Us On</h4>

                <div class="row">
                    <div class="col-sm-3">
                        <a href = "https://www.facebook.com/USTCICSOfficial"><i style="font-size:25px" class="fa">&#xf082</i></a>
                        <i style="font-size:25px" class="fa">&#xf0e0;</i>
                    </div>
                </div>

            </div>
            </div>
        </div>

    <div class="container-fluid down-footer">
        <p class="blackFooterText text-center">© 2024 University of Santo Tomas - College of Information and Computing Science</p>

        <!--Time Script-->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
            <script type="text/javascript">
                var timestamp = '<?= time(); ?>';
                function updateTime() {
                $('#time').html(Date(timestamp));
                timestamp++;
            }
                $(function() {
                setInterval(updateTime, 0);
        }
    );
</script>

</div>
</footer>

</body>
    
    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</html>
