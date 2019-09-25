<?php 
$servername ="localhost";
$username="root";
$password="";
$db="users";
$conn = mysqli_connect($servername, $username, $password, $db, '3307'); //CHO NAY SAI

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$name= $_POST['email'];
$password=$_POST['password'];
$sql ="SELECT * FROM users.thongtin where email='".$name."' AND password ='".$password."'";

$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
    echo "dang nhap thanh cong";
}else{
    header("Location: ./form.php");
}
?>