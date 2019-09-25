<?php
$servername = "localhost";
$username = "root";
$password = "";


//MySQLi connection with the object method and port
$conn = mysqli_connect($servername, $username, $password, '', '3307'); //CHO NAY SAI

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
$sql = "CREATE DATABASE hello";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

$conn->close();
?>