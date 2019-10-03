<?php
$servername = "localhost";
$username = "root";
$password = "";



$conn = mysqli_connect($servername, $username, $password, '', '3307'); //CHO NAY SAI

if (!$conn) {
    die("Connection failed : " . mysqli_connect_error());
    }
    echo "Connected successfully";
    mysqli_close($conn);

?>