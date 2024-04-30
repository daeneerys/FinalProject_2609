<?php
// papalit nalang ng mga deets sa database mu
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "finalproj2609_db"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
    
?>
