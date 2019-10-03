<?php
$file =fopen("test.txt","r") or die("k the mo duoc file dau dung co mo");
while(!feof($file)){
    echo fgets($file)."<br>";
}
fclose($file);
?>