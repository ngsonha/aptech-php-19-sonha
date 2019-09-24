
<h1>hello</h1>
<?php
$user =$_GET['taikhoan'];
$pass =$_GET['matkhau'];

if($user =="nam" && $pass == 123)
{
    header("Location:   https://getbootstrap.com/");
}
else{
    
    header("Location: ./index.php");
    
}

?>


