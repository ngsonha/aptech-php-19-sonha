<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="lamlaibt";



$conn = mysqli_connect($servername, $username, $password, $db, '3307'); //CHO NAY SAI

if (!$conn) {
    die("Connection failed : " . mysqli_connect_error());
    }
$sql = "SELECT * FROM user ";
    $result =$conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
        echo " " . $row["id"] . " " . $row["email"] . " " . $row["password"] . "<br>";
        }
        } else {
        echo "0 results";
        }
        $conn->close();
    ?>
