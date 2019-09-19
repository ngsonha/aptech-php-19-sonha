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
    echo "<h1>variable</h1>";

    $name ="N.S.H";
    $project="doing homework";

    echo "$name + $project<br>";
    
    //khai báo 1 hàm
    function test(){
        $x=4;
        echo "<b>ví dụ này là ví dụ thứ : $x </b>";
    }
    test();
    
    
    
    
    ?>
</body>
</html>