<?php
include 'adnavbar.php';
include 'connection.php';
$target_path = "resumes/";


// Total Number of Applicants
$totalApplicantsQuery = "SELECT COUNT(*) AS total FROM applicants_tb";
$totalApplicantsResult = $conn->query($totalApplicantsQuery);
$totalApplicantsRow = $totalApplicantsResult->fetch_assoc();
$totalApplicants = $totalApplicantsRow['total'];

// Number of Approved Applicants
$approvedApplicantsQuery = "SELECT COUNT(*) AS approved FROM applicants_tb WHERE applicantstatus = 'Approved'";
$approvedApplicantsResult = $conn->query($approvedApplicantsQuery);
$approvedApplicantsRow = $approvedApplicantsResult->fetch_assoc();
$approvedApplicants = $approvedApplicantsRow['approved'];

// Number of Denied Applicants
$deniedApplicantsQuery = "SELECT COUNT(*) AS denied FROM applicants_tb WHERE applicantstatus = 'Denied'";
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
</head>
<style>
        body {
        background-color: whitesmoke; 
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
        color: black; /* Black color */
    }


    .summary-box {
        display: inline-block;
        width: 30%;
        margin: 0 1%;
        padding: 20px;
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
        margin-right: 10px;
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

    th, td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd; 
    }

    th {
        background-color: #f2f2f2; 
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


</style>
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
            $sql = "SELECT * FROM applicants_tb ORDER BY id DESC";

    
            $result = $conn->query($sql);
            if ($result && $result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $id = $row['id'];
                    $studentnum = $row['studentnum'];
                    $firstname = $row['firstname'];
                    $lastname = $row['lastname'];
                    $email = $row['email'];
                    $dateApplied = $row['dateapplied'];
                    $applicantStatus = $row['applicantstatus'];
                    $organizationName = $row['organization'];
                    $programName = $row['program'];
                    $division = $row['division'];
                    $position = $row['position'];
                    $cvfile = $row['cvresume'];

                    echo '<tr>
                        <td>' . $id . '</td>
                        <td>' . $studentnum . '</td>
                        <td>' . $firstname . '</td>
                        <td>' . $lastname . '</td>
                        <td>' . $email . '</td> 
                        <td>' . $dateApplied . '</td>
                        <td>' . $applicantStatus . '</td>
                        <td>' . $organizationName . '</td>
                        <td>' . $division . '</td>
                        <td>' . $position . '</td> 
                        <td><a href = "'.$target_path . basename($row['cvresume']) .'">'. $cvfile . '</a></td>
                        <td>' . $programName . '</td>
                        <td>';
                        
                        // action buttons 2
                        if ($applicantStatus == 'Pending') {
                            echo '<form action="processapplication.php" method="post">
                                <input type="hidden" name="applicant_id" value="' . $id . '">
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
                echo '<tr><td colspan="9">0 results</td></tr>';
            }
            ?>
        </tbody>
    </table>
</div>

<?php
include_once 'adfooter.php';
?>
</body>
</html>
