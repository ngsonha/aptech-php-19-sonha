<?php 
$file= fopen("test.txt","w") or die("loi~ cmnr");
fwrite($file,"a zai cu bu");
fclose($file);
echo readfile("test.txt");

//--------------------------------


$file= fopen("test.txt","a+") or die("nowbody else love me");
fwrite($file," <br>cc may thang occho");
fclose($file);

$file =fopen("test.txt","a+") or die ("until u");
while(!feof($file)){
    echo fgets($file)."<br>";
}
fclose($file);

?>