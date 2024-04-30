<?php

if ( ! filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    die("Valid email is required");
}

if ($_POST["pass"] !== $_POST["password_confirmation"]) {
    die("Passwords must match");
}

$password_hash = password_hash($_POST["pass"], PASSWORD_DEFAULT);

$mysqli = require __DIR__ . "/accounts.php";

$sql = "INSERT INTO account (studentid, firstname, middlename, lastname, email, phonenumber, pass, sex, birth, degreeprogram)
VALUES (:studentid, :firstname, :middlename, :lastname, :email, :phonenumber, :password_hash, :sex, :birth, :degreeprogram)";

$stmt = $mysqli->prepare($sql);

if (!$stmt) {
    die("SQL error: " . $mysqli->errorInfo());
}

$stmt->bindParam('studentid',$_POST["studentid"]);
$stmt->bindParam('firstname', $_POST["firstname"]);
$stmt->bindParam('middlename', $_POST["middlename"]);
$stmt->bindParam('lastname', $_POST["lastname"]);
$stmt->bindParam(":email", $_POST["email"]);
$stmt->bindParam("password_hash", $password_hash);
$stmt->bindParam('phonenumber', $_POST["phonenumber"]);
$stmt->bindParam('sex', $_POST["sex"]);
$stmt->bindParam('birth', $_POST["birth"]);
$stmt->bindParam('degreeprogram', $_POST["degreeprogram"]);

if ($stmt->execute()) {
    header("Location: login.php");
    exit;
} else {
    if ($stmt->errorCode() === "23000") {
        die("Email already taken");
    } else {
        die($stmt->errorInfo());
    }
}








