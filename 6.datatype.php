<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    echo "<a href=\"./\">back</a>";

    //string 
    $x="<br>hello world";
    echo $x;
    
    //interger
    //var_dump() function returns the data type and value 
    //var_dump() tra ve ten kieu du lieu 
    $y=2;
    echo "<br>";
    var_dump($y);

    //FLOAT
    $z=10.2323;
    echo "<br>";
    var_dump($z);

    //Boolean
    //2 gia tri true or false
    //$x=true or $y=false

    //Aray
    $thongtin = array("sonha","20","nam");
    echo "<br>";
    var_dump($thongtin);

    //Object
    echo "<br>";
    class thongtin {
        function thongtin(){
            $this->model="TEN";
        }
    }
    $caigiday =new thongtin();
    echo $caigiday->model;

    //NULL
    echo "<br>";
    $a="xin chao cac ban !";
    $a=null;
    var_dump($a);
    ?>
</body>
</html>