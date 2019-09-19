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

    //Ex:1
    $a=0;
    while($a<5){
        echo $a;
        $a++;
    }
    
    //Ex:2
    echo "<br>";
    $b=0;
    do{
        echo $b;
        $b++;

    }while ($b<5);

    //Ex:3
    $a=5;
    for ($i=0;$i<=$a;$i++)
    {
        echo" <br>hello mother fucker $i";
    }

    $thongtin=["name"=>"son Ha","class"=>"Php","age"=>20];
    foreach($thongtin as $key =>$value)
    echo $key;
     
    ?>


</body>
</html>