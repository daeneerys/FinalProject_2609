<?php include_once "header.php" ?>

<!DOCTYPE html>

<head>
    <html lang="en">

    <link rel="stylesheet" href="css/organization.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="shortcut icon" type="image/x-icon" href="./assets/bb.ico">
    <title>CICS Organizations</title>
</head>

<body>
    <?php
    $organization = [
        "UST CNAG - CICS",
        "UST ICS Comission on Electronics",
        "UST Computer Science Society",
        "UST - Information Systems Society",
        "UST Pax Romana - ICS Unit",
        "UST SITE - CICS: Society of Information Technology Enthusiasts",
        "UST Thomasian Gaming Society"
    ];
    $orgpics = [
        "assets/Cnag.jpg",
        "assets/Comelec.jpg",
        "assets/Css.jpg",
        "assets/Iss.jpg",
        "assets/Pax.jpg",
        "assets/Site.jpg",
        "assets/Tgs.jpg",
    ];
    $orglinks = [
        "https://www.facebook.com/cnagics",
        "https://www.facebook.com/USTICSComelec",
        "https://www.facebook.com/USTCSS",
        "https://www.facebook.com/UST.ISSociety",
        "https://www.facebook.com/paxromanaiics",
        "https://www.facebook.com/site.ust",
        "https://www.facebook.com/ThomasianGamingSociety"
    ];
    $fbname = [
        "CNAG",
        "Comelec CICS",
        "CSS",
        "ISS",
        "Pax Romana",
        "UST SITE - CICS",
        "Thomasian Gaming Society",
    ];
    $orgemails = [
        "cnag.cics@ust.edu.ph",
        "comelec.cics@ust.edu.ph",
        "css.cics@ust.edu.ph",
        "iss.css@ust.edu.ph",
        "paxromana.cics@ust.edu.ph",
        "site.cics@ust.edu.ph",
        "tgs.cics@ust.edu.ph"
    ];
    $orgdesc = [
        "UST CNAG-CICS is the Official Cisco Organization for the College of Information & Computing Sciences.",
        "The UST ICS COMELEC is a governing body that promotes honest and clean election-related matters in the Institute of Information and Computing Sciences.",
        "The UST Computer Science Society (UST-CSS) is the mother and academic organization of the department of computer science of UST-CICS.",
        "An academic organization for students taking up Information Systems in the University of Santo Tomas. ISS is dedicated in the dissemination of knowledge and enhancing the talents of its members.",
        "The UST PAX ROMANA is a religous organization.",
        "UST SITE - CICS: Society of Information Technology Enthusiasts is the mother organization of the IT students of the University of Santo Tomas.",
        "TGS is an Organization focused on the Gaming Community of the University of Santo Tomas.",
    ];
    ?>

    <div class="main_container container-fluid">
        <div class="row row_organization">

            <?php foreach ($organization as $i => $orgName) : ?>

                <div class="col col-md-4">
                    <div class="card">
                        <img class="card_img" src="<?php echo $orgpics[$i]; ?>" class="card-img-top" alt="<?php echo $orgName; ?>">
                        <div class="card-body">
                            <h5 class="title card-title"><?php echo $orgName; ?></h5>
                            <div class="facebook_container">
                                <i style="font-size:18px" class="fa">&#xf230;</i>
                                <a href="<?php echo $orglinks[$i]; ?>">
                                    <p class="facebook"><?php echo $fbname[$i]; ?></p>
                                </a>
                            </div>

                            <div class="mail_container">
                                <i class="fa" style="font-size:18px">&#xf0e0;</i>
                                <a>
                                    <p class="mail"><?php echo $orgemails[$i] ?></p>
                                </a>
                            </div>

                            <p class="desc card-text"><?php echo $orgdesc[$i] ?>
                            </p>
                            <?php
                            if ($loggedIn) { ?>
                                <!-- Button trigger modal -->
                                <button type="button" class="apply_button" data-bs-toggle="modal" data-bs-target="#exampleModal" data-org-name="<?php echo $orgName; ?>
                                " onclick="document.getElementById('exampleModalLabel').textContent = this.getAttribute('data-org-name'); 
                                        //Set the value of the input
                                          document.getElementById('apply').value = this.getAttribute('data-org-name')">
                                    Apply
                                </button>
                            <?php } else { ?>
                                <a href="login.php">
                                    <button class="apply_button">Apply</button>
                                </a>
                            <?php }
                            ?>
                        </div>
                    </div>
                </div>


            <?php endforeach; ?>

            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">
                            </h5>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="app_process.php" method="post" name="" enctype="multipart/form-data">
                            <div class="modal-body">
                                <fieldset>
                                    <legend for="division">Division: </legend>
                                    <label class="div_label">
                                        <input class="option" name="division" type="radio" value="Presidential & Community Development Community" onChange="getValue(this)" checked="1">
                                        Presidential & Community Development Community
                                    </label>
                                    <label class="div_label">
                                        <input class="option" name="division" type="radio" value="Relations Division" onChange="getValue(this)">
                                        Relation Division
                                    </label>
                                    <label class="div_label">
                                        <input class="option" name="division" type="radio" value="Secretariat Committee" onChange="getValue(this)">
                                        Secretariat Committee
                                    </label>
                                    <label class="div_label">
                                        <input class="option" name="division" type="radio" value="Finance Committee" onChange="getValue(this)">
                                        Finance Committee
                                    </label>
                                    <label class="div_label">
                                        <input class="option" name="division" type="radio" value="Auditing Committee" onChange="getValue(this)">
                                        Auditing Committee
                                    </label>
                                    <label class="div_label">
                                        <input class="option" name="division" type="radio" value="Communications Division" onChange="getValue(this)">
                                        Communications Committee
                                    </label>
                                    <label class="div_label">
                                        <input class="option" name="division" type="radio" value="Creatives Division" onChange="getValue(this)">
                                        Creatives Committee
                                    </label>
                                    <label class="div_label">
                                        <input class="option" name="division" type="radio" value="Operations Division" onChange="getValue(this)">
                                        Operations Division
                                    </label>
                                    <label class="div_label">
                                        <input class="option" name="division" type="radio" value="Human Resource Division" onChange="getValue(this)">
                                        Human Resource Divison
                                    </label>

                                </fieldset>

                                <div name="Presidential & Community Development Community" id="presidential">
                                    <fieldset>
                                        <label for="position" class="pos_label"> Position:</label>
                                        <select name="pPosition" id="position">
                                            <option value="Executive Coordinator To The President">Executive Coordinator To The President</option>
                                            <option value="Executive Associate To The President">Executive Associate To The President</option>
                                            <option value="Internal Relations Committee">Internal Relations Committee</option>
                                        </select>

                                    </fieldset>
                                </div>

                                <div name="Relation Division" id="relation">
                                    <fieldset>
                                        <label class="pos_label" for="position"> Position: </label>
                                        <select name="rPosition" id="position">
                                            <option value="Internal Relations Committee">Internal Relations Committee</option>
                                            <option value="External Relations and Sponsorship Committee">External Relations and Sponsorship Committee</option>
                                            <option value="Executive Coordinator to the Vice President">Executive Coordinator to the Vice President</option>
                                            <option value="Head of Internal Relations">Head of Internal Relations</option>
                                            <option value="Head of External Relations and Sponsorship">Head of External Relations and Sponsorship</option>
                                        </select>

                                    </fieldset>
                                </div>

                                <div name="Secretariat Committee" id="secretariat">
                                    <fieldset>
                                        <label for="position" class="pos_label"> Position: </label>
                                        <select name="sPosition" id="position">
                                            <option value="Executive Coordinator to the Corporate Secretary">Executive Coordinator to the Corporate Secretary</option>
                                            <option value="Executive Associate to the Corporate Secretary">Executive Associate to the Corporate Secretary</option>
                                        </select>

                                    </fieldset>
                                </div>

                                <div name="Finance Committee" id="finance">
                                    <fieldset>
                                        <label for="position" class="pos_label"> Position: </label>
                                        <select name="fPosition" id="position">
                                            <option value="Executive Coordinator to the Chief Finance Director">Executive Coordinator to the Chief Finance Director</option>
                                            <option value="Executive Associate to the Chief Finance Director">Executive Associate to the Chief Finance Director</option>
                                        </select>

                                    </fieldset>
                                </div>

                                <div name="Auditing Committee" id="auditing">
                                    <fieldset>
                                        <label for="position" class="pos_label"> Position: </label>
                                        <select name="aPosition" id="position">
                                            <option value="Executive Coordinator to the Chief Audit Director">Executive Coordinator to the Chief Audit Director</option>
                                            <option value="Executive Associate to the Chief Audit Director">Executive Associate to the Chief Audit Director</option>
                                        </select>

                                    </fieldset>
                                </div>

                                <div name="Communications Division" id="communications">
                                    <fieldset>
                                        <label for="position" class="pos_label"> Position: </label>
                                        <select name="cPosition" id="position">
                                            <option value="Publicity Committee">Publicity Committee</option>
                                            <option value="Marketing and Campaigns Committee">Marketing and Campaigns Committee</option>
                                            <option value="Research and Development Committee">Research and Development Committee</option>
                                            <option value="Executive Coordinator to the Chief Communications Director">Executive Coordinator to the Chief Communications Director</option>
                                            <option value="Head of Publicity">Head of Publicity</option>
                                        </select>

                                    </fieldset>
                                </div>

                                <div name="Creatives Division" id="creatives">
                                    <fieldset>
                                        <label for="position" class="pos_label"> Position: </label>
                                        <select name="crPosition" id="position">
                                            <option value="Arts and Design Committee">Arts and Design Committee</option>
                                            <option value="Executive Coordinator to the Chief Creativies Director">Executive Coordinator to the Chief Creativies Director</option>
                                            <option value="Head of Graphics Design">Head of Graphics Design</option>
                                            <option value="Head of Arts and Design">Head of Arts and Design</option>
                                        </select>

                                    </fieldset>
                                </div>

                                <div name="Operations Division" id="operations">
                                    <fieldset>
                                        <label for="position" class="pos_label"> Position: </label>
                                        <select name="oPosition" id="position">
                                            <option value="Events and Activities Committee">Events and Activities Committee</option>
                                            <option value="Technical Operations Committee">Technical Operations Committee</option>
                                            <option value="Marshalls Committee">Marshalls Committee</option>
                                            <option value="Executive Coordinator to the Chief Operations Director">Executive Coordinator to the Chief Operations Director</option>
                                            <option value="Head of Events and Activites">Head of Events and Activites</option>
                                            <option value="Head of Technical Operations">Head of Technical Operations</option>
                                            <option value="Head of Marshalls">Head of Marshalls</option>
                                        </select>

                                    </fieldset>
                                </div>

                                <div name="Human Resource Division" id="resource">
                                    <fieldset>
                                        <label for="position" class="pos_label"> Position: </label>
                                        <select name="hrPosition" id="position">
                                            <option value="Grievance and Peace Committee">Grievance and Peace Committee</option>
                                            <option value="Talents Committee">Talents Committee</option>
                                            <option value="Evaluation Committee">Internal Relations Committee</option>
                                            <option value="Exectuive Coordinator to the Chief of Staff">Exectuive Coordinator to the Chief of Staff</option>
                                            <option value="Head of Grievances and Peace">Head of Grievances and Peace</option>
                                            <option value="Head of Talents">Head of Talents</option>
                                            <option value="Head of Evaluations">Head of Evaluations</option>
                                        </select>

                                    </fieldset>
                                </div>
                                <div class="cvFile"></label>
                                    <label class="cFile" for="cvFile">Upload your CV:</label>
                                        <input type="File" name="file">
                                </div>
                            </div>
                            <div class="modal-footer" id='poot'>
                                <button class="sub-btn" type="submit" id='apply' name='apply'>Submit </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <script type="text/javascript">
        function getValue(x) {
            if (x.value == 'Presidential & Community Development Community') {
                document.getElementById("presidential").style.display = 'block';
                document.getElementById("relation").style.display = 'none';
                document.getElementById("secretariat").style.display = 'none';
                document.getElementById("finance").style.display = 'none';
                document.getElementById("auditing").style.display = 'none';
                document.getElementById("communications").style.display = 'none';
                document.getElementById("creatives").style.display = 'none';
                document.getElementById("operations").style.display = 'none';
                document.getElementById("resource").style.display = 'none';

            } else if (x.value == 'Relations Division') {

                document.getElementById("presidential").style.display = 'none';
                document.getElementById("relation").style.display = 'block';
                document.getElementById("secretariat").style.display = 'none';
                document.getElementById("finance").style.display = 'none';
                document.getElementById("auditing").style.display = 'none';
                document.getElementById("communications").style.display = 'none';
                document.getElementById("creatives").style.display = 'none';
                document.getElementById("operations").style.display = 'none';
                document.getElementById("resource").style.display = 'none';

            } else if (x.value == 'Secretariat Committee') {

                document.getElementById("presidential").style.display = 'none';
                document.getElementById("relation").style.display = 'none';
                document.getElementById("secretariat").style.display = 'block';
                document.getElementById("finance").style.display = 'none';
                document.getElementById("auditing").style.display = 'none';
                document.getElementById("communications").style.display = 'none';
                document.getElementById("creatives").style.display = 'none';
                document.getElementById("operations").style.display = 'none';
                document.getElementById("resource").style.display = 'none';

            } else if (x.value == 'Finance Committee') {

                document.getElementById("presidential").style.display = 'none';
                document.getElementById("relation").style.display = 'none';
                document.getElementById("secretariat").style.display = 'none';
                document.getElementById("finance").style.display = 'block';
                document.getElementById("auditing").style.display = 'none';
                document.getElementById("communications").style.display = 'none';
                document.getElementById("creatives").style.display = 'none';
                document.getElementById("operations").style.display = 'none';
                document.getElementById("resource").style.display = 'none';

            } else if (x.value == 'Auditing Committee') {

                document.getElementById("presidential").style.display = 'none';
                document.getElementById("relation").style.display = 'none';
                document.getElementById("secretariat").style.display = 'none';
                document.getElementById("finance").style.display = 'none';
                document.getElementById("auditing").style.display = 'block';
                document.getElementById("communications").style.display = 'none';
                document.getElementById("creatives").style.display = 'none';
                document.getElementById("operations").style.display = 'none';
                document.getElementById("resource").style.display = 'none';

            } else if (x.value == 'Communications Division') {

                document.getElementById("presidential").style.display = 'none';
                document.getElementById("relation").style.display = 'none';
                document.getElementById("secretariat").style.display = 'none';
                document.getElementById("finance").style.display = 'none';
                document.getElementById("auditing").style.display = 'none';
                document.getElementById("communications").style.display = 'block';
                document.getElementById("creatives").style.display = 'none';
                document.getElementById("operations").style.display = 'none';
                document.getElementById("resource").style.display = 'none';

            } else if (x.value == 'Creatives Division') {

                document.getElementById("presidential").style.display = 'none';
                document.getElementById("relation").style.display = 'none';
                document.getElementById("secretariat").style.display = 'none';
                document.getElementById("finance").style.display = 'none';
                document.getElementById("auditing").style.display = 'none';
                document.getElementById("communications").style.display = 'none';
                document.getElementById("creatives").style.display = 'block';
                document.getElementById("operations").style.display = 'none';
                document.getElementById("resource").style.display = 'none';

            } else if (x.value == 'Operations Division') {
                document.getElementById("presidential").style.display = 'none';
                document.getElementById("relation").style.display = 'none';
                document.getElementById("secretariat").style.display = 'none';
                document.getElementById("finance").style.display = 'none';
                document.getElementById("auditing").style.display = 'none';
                document.getElementById("communications").style.display = 'none';
                document.getElementById("creatives").style.display = 'none';
                document.getElementById("operations").style.display = 'block';
                document.getElementById("resource").style.display = 'none';

            } else if (x.value == 'Human Resource Division') {

                document.getElementById("presidential").style.display = 'none';
                document.getElementById("relation").style.display = 'none';
                document.getElementById("secretariat").style.display = 'none';
                document.getElementById("finance").style.display = 'none';
                document.getElementById("auditing").style.display = 'none';
                document.getElementById("communications").style.display = 'none';
                document.getElementById("creatives").style.display = 'none';
                document.getElementById("operations").style.display = 'none';
                document.getElementById("resource").style.display = 'block';
            } else {
                document.getElementById("presidential").style.display = 'block';
                document.getElementById("relation").style.display = 'none';
                document.getElementById("secretariat").style.display = 'none';
                document.getElementById("finance").style.display = 'none';
                document.getElementById("auditing").style.display = 'none';
                document.getElementById("communications").style.display = 'none';
                document.getElementById("creatives").style.display = 'none';
                document.getElementById("operations").style.display = 'none';
                document.getElementById("resource").style.display = 'none';
            }
        }
    </script>
    <script src="organization.js"></script>
</body>

<?php include_once "footer.php" ?>




</html>