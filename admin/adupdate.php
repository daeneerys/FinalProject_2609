<?php
include ("admindb.php");
include_once('adnavbar.php');

$id = $_GET['updateID'];

$sql = "SELECT * FROM user WHERE id = $id";
$stmt = $conn -> prepare($sql);

$stmt->execute();

$row = $stmt->fetch(PDO::FETCH_ASSOC);
$id = $row['id'];
$email = $row['email'];

if(isset($_POST["submit"])){
    $email = $_POST['email'];

    try {
        $sql = "UPDATE user
                SET email = :email
                WHERE id = :id";

        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':email', $email);
                
        $stmt->execute();

        header("Location: admindatabase.php");
    }catch(PDOException $e){
        echo $sql . "<br>" . $e->getMessage();
    }
    $conn = null;        
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="adupdate.css">
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>

    <title>Administrator update</title>
</head>
<body>
<div class="container-fluid">
    <form method = "post">
        <h1>Administrator update</h1>
        <br>

        <label for = "email">Email:</label>
        <input type = "email" id = "email" name ="email" value="<?php echo $email; ?>" required>
        <br><br>

        <button class="btn btn-success" type = "submit" name ="submit">Submit</button>
    </form>
</div>
</body>
</html>
