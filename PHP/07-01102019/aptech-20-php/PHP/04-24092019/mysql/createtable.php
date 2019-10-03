<?php 
$servername="localhost";
$username="root";
$password="";
$db="lamlaibt";

$conn =mysqli_connect($servername,$username,$password,$db,'3307');

if(!$conn)
{
    die("connect failed : " .mysqli_connect_errors());
}

$sql="CREATE TABLE user(
   id int UNSIGNED AUTO_INCREMENT PRIMARY KEY,
   email varchar(255),
   password varchar(255)
)";

if(mysqli_query($conn,$sql)){
    echo "table created successfuly";
}else{
    echo "fail!!!".mysqli_error($conn);
}
mysqli_close($conn);
?>