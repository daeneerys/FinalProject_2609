
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About CICS</title>
    <link rel="stylesheet" href="css/about.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="index.js" defer></script>
</head>
<body>
    <div id="header">
    <?php include_once 'header.php'; ?>
    </div>
    <br><br><br><br><br><br><br><br><br>
    <div class="container-fluid">
    <h1 class="featuredText text-center">COLLEGE OF INFORMATION AND COMPUTING SCIENCES</h1>
    <br><br>
    <h3 class="featuredTextdeg text-center">DEGREE PROGRAMS</h3>
    <br><br>
    <div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <div class="box" onclick="showText('bscs')">
                <div class="content">
                    <h2 class="rowtext">Bachelor of Science in Computer Science (BSCS)</h2>
                    <p class="featuredsubtext">Click to learn more</p>
                </div>
                <div class="hidden" id="bscsText">
                    <p>Bachelor of Science in Computer Science offers three professional elective tracks for students:</p>
                    <ol>
                        <li>Core Computer Science: Discusses traditional fields of Computer Science not covered by required courses.</li>
                        <li>Game Development: Focuses on creative and technical skills in game development.</li>
                        <li>Data Science: Prepares students for careers in data-driven industries.</li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="box" onclick="showText('bsis')">
                <div class="content">
                    <h2 class="rowtext">Bachelor of Science in Information Systems (BSIS)</h2>
                    <p class="featuredsubtext">Click to learn more</p>
                </div>
                <div class="hidden" id="bsisText">
                    <p>Bachelor of Science in Information Systems program offers two professional elective tracks for students:</p>
                    <ol>
                        <li>Business Analytics: Prepares students for careers in Business Analytics.</li>
                        <li>Service Management: Prepares students for careers in the IT-BPO industry.</li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="box" onclick="showText('bsit')">
                <div class="content">
                    <h2 class="rowtext">Bachelor of Science in Information Technology (BSIT)</h2>
                    <p class="featuredsubtext">Click to learn more</p>
                </div>
                <div class="hidden" id="bsitText">
                    <p>Bachelor of Science in Information Technology program will offer three professional elective tracks for students:</p>
                    <ol>
                        <li>Network and Security: Focuses on managing and securing computer networks.</li>
                        <li>Web and Mobile App Development: Introduces additional programming languages and frameworks.</li>
                        <li>IT Automation: Focuses on hardware integration and application in real-life scenarios.</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <br>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="botbox">
                <div class="content">
                    <h2 class="rowtext">HISTORY</h2>
                    <p class="featuredsubtext">
                        The Institute of Information and Computing Sciences was formally established in 2014, with its separation as an independent academic unit from the Faculty of Engineering. Its programs trace their histories to the College of Science (for Computer Science), College of Commerce and Business Administration (for Information Systems), and the Faculty of Engineering (for Information Technology).<br><br> 
                        Asst. Prof. Alex A. Santos was the inaugural Director, while Rev. Fr. Hermel O. Pama, O.P., PhD was the first Regent.
                    </p>
                </div>
            </div>
        </div>
        
        <div class="col-md-5">
            <div class="botbox">
                <div class="content">
                    <h2 class="rowtext">RECOGNITIONS</h2>
                    <br>
                    <p class="featuredsubtext">CHED - Center of Development (Computer Science, Information Systems, Information Technology) <br><br>
                        PAASCU - Level II Accreditation (BS Computer Science, BS Information Systems, BS Information Technology) </p><br><br>      
                </div>
            </div>
        </div>
    </div>
    </div>

    <br><br><br>
    <div>
        <div>
            <div class="content text-center">
                <h2 class="featuredText">PATRON SAINT</h2>
                <p class="featuredsubtext"><strong>ST. VINCENT FERRER</strong></p>
                <img src="assets/st_vincent_ferrer.jpeg" alt="St. Vincent Ferrer">
                <p class="featuredsubtext content"><strong>(1350-1419), priest</strong><br><br>
                <strong>Feast Day: May 5</strong><br><br>
                In 1350, Vincent was born in Valencia, Spain to William Ferrer and Constancia Miguel, both nobles. He was educated in Valencia and at the age of 17 received the habit of the Order of Preachers, and was sent to Barcelona for further studies. Later, he taught philosophy at Lérida and in three years returned once more to Barcelona. He proceeded to continue his studies at Toulouse, where, in his own words, “study followed prayer, and prayer succeeded study”.<br><br>
                In 1398, Vincent was recovering from a serious illness when he had a vision of Christ accompanied by St. Dominic and St. Francis directing him to teach penance. In the troubled times in which he lived, he was an ‘angel of peace’, a messenger of penance sent to prepare men and women for the judgment. For twenty years, he traversed Spain, France, and Italy, preaching penance and awakening the dormant consciences of sinners by his wondrous eloquence. His austere life was but the living expression of his preaching. Although he preached in his own native tongue to people who spoke different languages, he was clearly understood by all because of his extraordinary ‘gift of tongues’. He was also outstanding for the ‘gift of prophecy’, worked astonishing miracles and brought back thousands, including Jews and Moors, to the faith. His authority helped to bring the Great Schism to an end. He spent the last three years of his life in France and died in 1419. Pope Calixtus III canonized him in 1455.<br><br>
                St. Vincent Ferrer endeavored to inform the people of his time about penance to prepare them for judgment, which he simply yet extraordinarily carried out through spiritual algorithms so to speak: the ‘gift of tongues’ and the ‘gift of prophecy’. Under the inspiration of its patron, the UST Institute of Information and Computing Sciences declares its commitment to the pursuit of truth and the formation of technically competent Information Technology Education professionals endowed with a strong commitment to lifelong learning, social responsibility and a desire for leadership in the spirit of service.
                </p>
            </div>
        </div>
    </div>
    <!--Mission & Vision -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <h1 class="featuredText text-center"><br><br>Vision</h1>
                <p class="featuredsubtext content">The Institute of Information and Computing Sciences envisions itself as a premier and innovative institution in Information Technology Education and research in the Asia-Pacific Region.</p>
            </div>
            <div class="col-md-6">
                <h1 class="featuredText text-center"><br><br>Mission</h1>
                <p class="featuredsubtext content">The Institute of Information and Computing Sciences of the University of Santo Tomas, under the inspiration of its model, Saint Thomas Aquinas, and its patron, Saint Vincent Ferrer, declares its commitment to the pursuit of truth and the formation of technically competent ITE professionals endowed with a strong commitment to lifelong learning, social responsibility and a desire for leadership in the spirit of service in their respective fields of specialization.</p>
            </div>
        </div>
    </div>
    <br><br>
    <div id="footer">
    <?php include_once 'footer.php'; ?>
    </div>  
    <script>
        var currentProgram = null;

        function showText(program) {
            var programText = document.getElementById(program + 'Text');
            if (currentProgram === program) {
                programText.classList.toggle('hidden');
            } else {
                hideCurrentProgram();
                programText.classList.remove('hidden');
                currentProgram = program;
            }
        }

        function hideCurrentProgram() {
            if (currentProgram !== null) {
                var currentProgramText = document.getElementById(currentProgram + 'Text');
                currentProgramText.classList.add('hidden');
            }
        }
    </script>
</body>
</html>
