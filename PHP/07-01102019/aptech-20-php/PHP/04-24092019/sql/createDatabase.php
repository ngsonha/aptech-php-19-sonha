<?php 
$servername ="localhost";
$username="root";
$password="";
$conn = mysqli_connect($servername, $username, $password, '', '3307'); //CHO NAY SAI

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$sql="CREATE table hello.user(
    id int UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username varchar(255),
    password varchar(255)
)";
if (mysqli_query($conn,$sql)){
    echo "table hehehehe sucssessfully";
}else{
    echo "loi roi huhhu".mysqli_error($conn);
}
mysqli_close($conn);
?>