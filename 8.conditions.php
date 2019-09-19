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
    //EX:1
    $a=9;
    $b=15;
    if($a>$b)
    {
        echo "a lon hon b";
    }
    else{
        echo "a be hon b";
    }

    //Ex:2
    echo "<br>";
    $conbonglongxuyen ="long xuyen";
    switch ($conbonglongxuyen){
        case "da nang":
        echo "con bong da nang";
        break;
        case "hoi an":
        echo "con bong hoi an";
        break;
        case "long xuyen";
        echo "con bong long xuyen";
        break;
        echo  "con bong khanh hoa";
        break;
        default:
        echo "con bong quoc gia";
    }
    ?>
</body>
</html>