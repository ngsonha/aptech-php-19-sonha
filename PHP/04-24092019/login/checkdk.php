

<?php 



$servername="localhost";
$username="root";
$password="";
$db="lamlaibt";
$conn=mysqli_connect($servername,$username,$password,$db,'3307');
if (!$conn)
{
    die("connect fail".mysqli_error());
}
$id=$_POST['email'];
$taikhoan= $_POST['email'];
$password=$_POST['password'];
$stmt=$conn->prepare("INSERT INTO user (id,email,password) VALUES (?,?,?)");
$stmt->bind_param("sss",$id,$email,$password);

$stmt->execute();
echo "insert new data successfully";
$stmt->close();
mysqli_close($conn);
?>