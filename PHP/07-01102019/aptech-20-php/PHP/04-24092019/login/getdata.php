<?php
$servername="localhost";
$username="root";
$password="";
$db="users";

$conn=mysqli_connect($servername,$username,$password,$db,'3307');

if (!$conn){
    die ("Connection failed : ".mysqli_connect_error());
}
$name =''
?>

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$name = 'Nhan';
$sql = "SELECT * FROM thong_tin_lop WHERE ten = '" . $name . "' AND tuoi = 19";
echo $sql;
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
  // output data of each row
  // while ($row = mysqli_fetch_assoc($result)) {
  //   echo "id: " . $row["id"] . " - Name: " . $row["ten"] . " " . $row["tuoi"] . "<br>";
  // }
  echo "dang nhap thanh cong";
} else {
  echo "Dang nhap that bai";
}
mysqli_close($conn);