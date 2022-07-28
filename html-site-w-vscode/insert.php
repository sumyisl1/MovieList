<!DOCTYPE html> <!--Reference back to action page -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="main.css">

    <title>Results</title>
</head>

<body style="background-color: rgb(248, 195, 239)">
    <div id="results"></div>
    <a href="action_page.php">Back to form<br></a>

</body>

</html>

<?php

$servername = "localhost";
$username = "root";
$password = "Sumsum123!";
$table = "test";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $table);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully. ";

if (isset($_POST['submit'])) // Checks what you submit and stores into variables, then stores into table
{
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $sql = "INSERT INTO movielist (MovieName, Year) VALUES ('$fname','$lname')";
    if (mysqli_query($conn, $sql)) {
        echo "'$fname' and '$lname' has been added successfully!";
    } else {
        echo "error: " . $sql . ":-" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>

