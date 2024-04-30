<?php
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (isset($_POST["approve"])) {
    if (isset($_POST['applicant_id'])) {
      $applicant_id = $_POST['applicant_id'];

      // approve
      $updateQuery = "UPDATE applicants_tb SET applicantstatus = 'Approved' WHERE id = " . $applicant_id;
      if ($conn->query($updateQuery) === TRUE) {
        header("Location: dashboard.php");
        exit;
      } else {
        echo "Error updating record: " . $conn->error;
      }
    } else {
      echo "Error: Applicant ID not set.";
    }
  }

  // decline (similar logic with 'Denied' status)
  if (isset($_POST["decline"])) {
    if (isset($_POST['applicant_id'])) {
        $applicant_id = $_POST['applicant_id'];
  
        // approve
        $updateQuery = "UPDATE applicants_tb SET applicantstatus = 'Denied' WHERE id = " . $applicant_id;
        if ($conn->query($updateQuery) === TRUE) {
          header("Location: dashboard.php");
          exit;
        } else {
          echo "Error updating record: " . $conn->error;
        }
      } else {
        echo "Error: Applicant ID not set.";
      }
  }
} else {
  header("Location: dashboard.php");
  exit;
}
?>