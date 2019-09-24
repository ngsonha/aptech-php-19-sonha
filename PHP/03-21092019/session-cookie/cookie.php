<?php
setcookie('myName','Nguyen Son Ha',time()+15);
if($_COOKIE['myName']){
    echo "hello is :".$_COOKIE['myName'];
}

?>

