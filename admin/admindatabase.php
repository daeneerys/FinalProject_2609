    <?php
    include('adnavbar.php');
    $target_path = 'C:\xampp\htdocs\ICS2609 - FinalProject\resumes';
    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="readstyle.css">
        <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
        <title>Admin Table</title>
    </head>

    <body>
        <div class="divheader">
            <h1 class="h1format">Administrators</h1>
            <button onclick="window.location.href='signup.php'" class="btn btn-success buttontext">ADD PROFILE</button>
        </div>
        <br>
        <table class="table table-bordered center tableformat">
            <thead>
                <tr>
                    <th>Admin ID</th>
                    <th>Email</th>
                    <th>Controls</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (isset($conn)) {
                    $sql = "SELECT * FROM user ORDER BY id";
                    $stmt = $conn->prepare($sql);
                    $stmt->execute();

                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        $id = $row['id'];
                        $email = $row['email'];
                        echo '<tr>
                        <td>' . $id . '</td>
                        <td>' . $email . '</td>
                        <td>
                            <button class="btn btn-success"><a href="adupdate.php?updateID=' . $id . '" class="buttontext">Edit</a></button>
                            <button class="btn btn-danger"><a href="addelete.php?deleteID=' . $id . '" class="buttontext">Delete</a></button>
                        </td>
                        </tr>';
                    }
                } else {
                    echo "Database connection is not established.";
                }
                ?>
            </tbody>
        </table>
    </body>

    </html>