<?php 
$servername="localhost";
$username="root";
$password="";
$db="lamlaibt";

$conn =mysqli_connect($servername,$username,$password,$db,'3307');
if(!$conn)
{
    die ("connect failed :".mysqli_error());
}
$sql="INSERT INTO user (id,email,password) VALUES
(1,'sonha@gmail.com','123'),
(2,'vantinh@gmail.com','asd123'),
(3,'duckhai@gmail.com','234')

";

if(mysqli_query($conn,$sql))
{
    echo "insert thanh cong";

}else{
    echo "that bai !".mysqli_error($conn);
}
mysqli_close($conn);
?>