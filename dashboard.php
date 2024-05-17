<?php
include 'adnavbar.php';
include 'connection.php';
include 'adsession.php';
$target_path = "resumes/";

$admin_email = $_SESSION['email'];

$organization = [
    "UST CNAG - CICS",
    "UST ICS Comission on Electronics",
    "UST Computer Science Society",
    "UST - Information Systems Society",
    "UST Pax Romana - ICS Unit",
    "UST SITE - CICS: Society of Information Technology Enthusiasts",
    "UST Thomasian Gaming Society"
];

$orgName = "";

if ($admin_email == 'cnag.cics@ust.edu.ph') { // Total Number of Applicants
    $orgName = 'UST CNAG - CICS';
} else if ($admin_email == 'Icscomelec.cics@ust.edu.ph') {
    $orgName = 'UST ICS Comission on Electronics';
} else if ($admin_email == 'css.cics@ust.edu.ph') {
    $orgName = 'UST Computer Science Society';
} else if ($admin_email == 'iss.cics@ust.edu.ph') {
    $orgName = 'UST - Information Systems Society';
} else if ($admin_email == 'paxromana.cics@ust.edu.ph') {
    $orgName = 'UST Pax Romana - ICS Unit';
} else if ($admin_email == 'site.cics@ust.edu.ph') {
    $orgName = 'UST SITE - CICS: Society of Information Technology Enthusiasts';
} else if ($admin_email == 'tgs.cics@ust.edu.ph') {
    $orgName = 'UST Thomasian Gaming Society';
} else {
}

// Define the SQL query to retrieve applicant data for the specified organization
$sql = "SELECT * FROM applicants_tb WHERE organization = '$orgName' ORDER BY id DESC";

//Filter Applicants based on Admin
$totalApplicantsQuery = "SELECT COUNT(*) AS total FROM applicants_tb WHERE organization = '$orgName'";
$totalApplicantsResult = $conn->query($totalApplicantsQuery);
$totalApplicantsRow = $totalApplicantsResult->fetch_assoc();
$totalApplicants = $totalApplicantsRow['total'];

// Number of Approved Applicants
$approvedApplicantsQuery = "SELECT COUNT(*) AS approved FROM applicants_tb WHERE applicantstatus = 'Approved' and organization = '$orgName'";
$approvedApplicantsResult = $conn->query($approvedApplicantsQuery);
$approvedApplicantsRow = $approvedApplicantsResult->fetch_assoc();
$approvedApplicants = $approvedApplicantsRow['approved'];

// Number of Denied Applicants
$deniedApplicantsQuery = "SELECT COUNT(*) AS denied FROM applicants_tb WHERE applicantstatus = 'Denied' and organization = '$orgName'";
$deniedApplicantsResult = $conn->query($deniedApplicantsQuery);
$deniedApplicantsRow = $deniedApplicantsResult->fetch_assoc();
$deniedApplicants = $deniedApplicantsRow['denied'];

// Update
$updateCountsQuery = "UPDATE applicants_tb SET totalApplicants = $totalApplicants, approvedApplicants = $approvedApplicants, deniedApplicants = $deniedApplicants";
$conn->query($updateCountsQuery);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" type="text/css" href="dashboard.css">
    <style>
        body {
            background-color: whitesmoke;
            font-family: Montserrat, sans-serif;
            margin: auto;
        }

        .grey-background {
            background-color: #f7f7f7;
        }

        .accent-black-text {
            color: black;
        }

        #dashboard-header {
            text-align: center;
            font-size: 36px;
            color: black;
            /* Black color */
        }

        .summary-box {
            display: inline-block;
            width: 30%;
            margin: 0 1%;
            padding: 30px;
            border: 1px solid #ddd;
            border-radius: 5px;
            text-align: center;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .summary-content {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .icon {
            width: 50px;
            height: 50px;
            margin-right: 35px;
        }

        .summary-text {
            text-align: left;
        }

        .summary-title {
            font-size: 18px;
            font-weight: bold;
        }

        .summary-value {
            font-size: 24px;
            font-weight: bold;
        }

        .table-container {
            margin-top: 20px;
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 20px;
            text-align: left;
            border-bottom: 1px solid #ddd;
            border-right: 1px solid #ddd; 
        }

        th:last-child,
        td:last-child {
            border-right: none;
        }

        th {
            background-color: #f2f2ff;
            border-top: 1px solid #ddd; 
        }
        /* act bttons */
        .btn {
            padding: 6px 12px;
            margin: 2px;
            font-size: 14px;
            cursor: pointer;
            border-radius: 4px;
            border: 1px solid transparent;
        }

        .btn-success {
            color: #fff;
            background-color: #5cb85c;
            border-color: #4cae4c;
        }

        .btn-danger {
            color: #fff;
            background-color: #d9534f;
            border-color: #d43f3a;
        }
    </style>
</head>

<body>
    <div id="dashboard-header">ADMIN DASHBOARD</div>
    <br>
    <div id="summary-boxes">
        <div class="summary-box total-applicants grey-background accent-black-text">
            <div class="summary-content">
                <img src="assets/search-interface-symbol.png" alt="Total Applicants" class="icon">
                <div class="summary-text">
                    <div class="summary-title">TOTAL APPLICANTS</div>
                    <div class="summary-value"><?php echo $totalApplicants; ?></div>
                </div>
            </div>
        </div>
        <div class="summary-box approved-applications grey-background accent-black-text">
            <div class="summary-content">
                <img src="assets/check.png" alt="Approved Applications" class="icon">
                <div class="summary-text">
                    <div class="summary-title">APPROVED APPLICATIONS</div>
                    <div class="summary-value"><?php echo $approvedApplicants; ?></div>
                </div>
            </div>
        </div>
        <div class="summary-box denied-applications grey-background accent-black-text">
            <div class="summary-content">
                <img src="assets/access-denied.png" alt="Denied Applications" class="icon">
                <div class="summary-text">
                    <div class="summary-title">DENIED APPLICATIONS</div>
                    <div class="summary-value"><?php echo $deniedApplicants; ?></div>
                </div>
            </div>
        </div>
    </div>

    <div class="table-container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Applicant ID</th>
                    <th>Student Number</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Date Applied</th>
                    <th>Applicant Status</th>
                    <th>Organization</th>
                    <th>Division</th>
                    <th>Position</th>
                    <th>CV</th>
                    <th>Program</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Fetch data for the table
                $result = $conn->query($sql);
                if ($result && $result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo '<tr>
                                  <td>' . $row['id'] . '</td>
                                  <td>' . $row['studentnum'] . '</td>
                                  <td>' . $row['firstname'] . '</td>
                                  <td>' . $row['lastname'] . '</td>
                                  <td>' . $row['email'] . '</td> 
                                  <td>' . $row['dateapplied'] . '</td>
                                  <td>' . $row['applicantstatus'] . '</td>
                                  <td>' . $row['organization'] . '</td>
                                  <td>' . $row['division'] . '</td>
                                  <td>' . $row['position'] . '</td> 
                                  <td><a href = "' . $target_path . basename($row['cvresume']) . '">' . $row['cvresume'] . '</a></td>
                                  <td>' . $row['program'] . '</td>
                                  <td>';
                        // Action buttons
                        if ($row['applicantstatus'] == 'Pending') {
                            echo '<form action="processapplication.php" method="post">
                                    <input type="hidden" name="applicant_id" value="' . $row['id'] . '">
                                    <button type="submit" name="approve" class="btn btn-success">Approve</button>
                                    <button type="submit" name="decline" class="btn btn-danger">Decline</button>
                                  </form>';
                        } else {
                            echo 'No action available';
                        }
                        echo '</td>
                              </tr>';
                    }
                } else {
                    echo '<tr><td colspan="13">0 results</td></tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>

<?php
include_once 'adfooter.php';
?>
