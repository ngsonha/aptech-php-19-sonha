<?php 
$servername="localhost";
$username="root";
$password="";

$conn =mysqli_connect($servername,$username,$password,'','3307');

if(!$conn)
{
    die("connect failed : " .mysqli_connect_errors());
}

$sql="CREATE DATABASE lamlaibt ";
if($conn->query($sql)==true){
    echo "Database created successfully";
}else{
    echo "error! TRY again".$conn->error;
}
mysqli_close($conn);
?>