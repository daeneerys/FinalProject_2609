<?php
include("header.php");
include("connection.php");

if(isset($_POST['submit'])) {

    header("Location: reg_successful.php");
    exit(); 
}
?>

<!DOCTYPE html>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const validation = new JustValidate("#signup");

        validation
            .addField("#email", [{
                    rule: "required"
                },
                {
                    rule: "email"
                },
                {
                    validator: (value) => () => {
                        return fetch("validate-email.php?email=" + encodeURIComponent(value))
                            .then(function(response) {
                                return response.json();
                            })
                            .then(function(json) {
                                return json.available;
                            });
                    },
                    errorMessage: "email already taken"
                }
            ])
            .addField("#password", [{
                    rule: "required"
                },
                {
                    rule: "password"
                }
            ])
            .addField("#password_confirmation", [{
                validator: (value, fields) => {
                    return value === fields["#password"].elem.value;
                },
                errorMessage: "Passwords should match"
            }])
            .onSuccess((event) => {
                document.getElementById("signup").submit();
            });
    });
</script>

<html lang="en">

<head>
    <link rel="shortcut icon" type="image/x-icon" href="./assets/bb.ico">
</head>

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/register.css">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>CICS Organization</title>

</head>


<body>
<br><br><br><br><br><br><br><br>
    <!--Form Container-->
    <div class="container-md">
        <h3 class="regtext text-start">Account Registration</h3>

        <!-- Form -->
        <form method="post" action="./reg_process.php" id="register" novalidate>

            <div class="row">
                <div class="">
                    <p class="form_title" for="studentid">Student Id: </p><br>
                    <input class="formField" type="text" id="studentid" name="studentid" placeholder="Enter Your Student Id" required>
                    <p class="form_title" for="firstname">First Name: </p><br>
                    <input class="formField" type="text" id="firstname" name="firstname" placeholder="Enter Your First Name" required>
                    <br>
                    <p class="form_title" for="middlename">Middle Name: </p><br>
                    <input class="formField" type="text" id="middlename" name="middlename" placeholder="Enter Your Middle Name" required>
                    <br>

                    <p class="form_title" for="lastname">Last Name: </p><br>
                    <input class="formField" type="text" id="lastname" name="lastname" placeholder="Enter Your Last Name" required>
                    <br>
                </div>

                <div class="">
                    <p class="form_title" for="email">Email: </p><br>
                    <input class="formField" type="email" id="email" name="email" placeholder="Enter Your Email" required>
                    <br>

                    <p class="form_title" for="phonenumber">Phone Number: </p><br>
                    <input class="formField" type="int" id="phonenumber" name="phonenumber" placeholder="Enter Your Phone Number" required maxlength="11">
                    <br>

                    <p class="form_title" for="pass">Password: </p><br>
                    <input class="formField" type="password" id="pass" name="pass" placeholder="Enter Your Password" minlength="8" required>

                    <p class="form_title" for="passrepeat">Retype Password: </p><br>
                    <input class="formField" type="password" id="password_confirmation" name="password_confirmation" placeholder="Enter Your Password Again" minlength="8" required>
                </div>
            </div> <!--end of row-->

            <div class="row">
                <div class="">
                    <p class="form_title">Sex</p><br>
                    <div class="row customMarg">
                        <div class="col-sm-3 sm-3custom">
                            <label for="sex">
                                <input type="radio" id="male" name="sex" value="Male" class="inline" required> Male
                            </label>
                        </div>

                        <div class="col-sm-2">
                            <label for="sex">
                                <input type="radio" id="female" name="sex" value="Female" class="inline" required> Female
                            </label>
                        </div>
                    </div>

                    <!--birthdate-->
                    <br>
                    <p class="form_title">Birth Date </p><br>
                    <input class="formField" type="date" name="birth" id="birth" required>
                    <br>

                    <br>
                </div>

                <div>

                    <p class="form_title" for="degreeprogram">Degree Program: </p><br>
                    <select class="formField" name="degreeprogram" id="degreeprogram">
                        <option value="">Select</option>
                        <option value="Computer Science">Computer Science</option>
                        <option value="Information System">Information System</option>
                        <option value="Information Technology">Information Technology</option>
                    </select>
                    <br><br>
                </div>
            </div>

            <button class="submitButton" type="submit" name="submit">Register</button>
        </form>
        </form>
    </div>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>

<?php include('footer.php'); ?>