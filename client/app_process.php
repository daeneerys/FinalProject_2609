<?php
include("connection.php");
include_once("session.php");
$mysqli = require __DIR__ . "/accounts.php";
$studentnum = $_SESSION['studentid'];
$email = $_SESSION['email'];
$firstname = $_SESSION['firstname'];
$lastname = $_SESSION['lastname'];
$applicantstatus = "Pending";
$dateapplied = date("Y/m/d");
$totalApplicants = "1";
$approvedApplicants = "1";
$deniedApplicants = "1";
$program = $_SESSION["degreeprogram"];



if (isset($_POST['apply'])) {
  $organization = $_POST['apply'];
  $division = $_POST['division'];

  if($division == "Presidential & Community Development Community"){
    $position = $_POST['pPosition'];
  }else if($division == "Relations Division"){
    $position = $_POST['rPosition'];
  }else if($division == "Secretariat Committee"){
    $position = $_POST['sPosition'];
  }else if($division == "Finance Committee"){
    $position = $_POST['fPosition'];
  }else if($division == "Auditing Committee"){
    $position = $_POST['aPosition'];
  }else if($division == "Communications Division"){
    $position = $_POST['cPosition'];
  }else if($division == "Creatives Division"){
    $position = $_POST['crPosition'];
  }else if($division == "Operations Division"){
    $position = $_POST['oPosition'];
  }else if($division == "Human Resource Division"){
    $position = $_POST['hrPosition'];
  }
  #For files with similar name
  $pname = rand(1000,10000)."-".$_FILES["file"]["name"];

  #Temporarily store file
  $tname = $_FILES["file"]["tmp_name"];

  #upload directory path
  $upload_dir = 'C:\xampp\htdocs\ICS2609 - FinalProject\admin\resumes';

  #To move the uploaded file to a location
  move_uploaded_file($tname, $upload_dir.'/'.$pname);

  #To database

}  

try {
  $mysqli = require __DIR__ . "/accounts.php";

  $sql = "INSERT INTO applicants_tb (studentnum, firstname, lastname, email, dateapplied, applicantstatus, totalapplicants, approvedApplicants, deniedApplicants, organization, program, position, division, cvresume)
    VALUES (:studentnum, :firstname, :lastname, :email, :dateapplied, :applicantstatus, :totalApplicants, :approvedApplicants, :deniedApplicants, :organization, :program, :position, :division, :pname)";

  $stmt = $mysqli->prepare($sql);


  $stmt->bindParam(':studentnum', $studentnum);
  $stmt->bindParam(':firstname', $firstname);
  $stmt->bindParam(':lastname', $lastname);
  $stmt->bindParam(':email', $email);
  $stmt->bindParam(':dateapplied', $dateapplied);
  $stmt->bindParam(':applicantstatus', $applicantstatus);
  $stmt->bindParam(':totalApplicants', $totalApplicants);
  $stmt->bindParam(':approvedApplicants', $approvedApplicants);
  $stmt->bindParam(':deniedApplicants', $deniedApplicants);
  $stmt->bindParam(':organization', $organization);
  $stmt->bindParam(':program', $program);
  $stmt->bindParam(':position', $position);
  $stmt->bindParam(':division',$division);
  $stmt->bindParam(':pname',$pname);


  if ($stmt->execute()) {
    header("Location: successful.php");
    exit;
  }
} catch (PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}
