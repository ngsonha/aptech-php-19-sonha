<?php 
$servername ="localhost";
$username="root";
$password="";
$conn = mysqli_connect($servername, $username, $password, '', '3307'); //CHO NAY SAI

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());

}
$sql="INSERT INTO hello.user(id,username,password)
value (1,'nguyen son ha','123'),
(2,'le van tinh','345'),
(3,'nguyen son haaaaa','234'),
(4,'nguyen son hanh','897'),
(5,'nguyen van b','267');
";
if (mysqli_query($conn,$sql)){
    echo "tao thanh cong";
}else{
    echo "heheh sai ui`";
}
mysqli_close($conn);
?>