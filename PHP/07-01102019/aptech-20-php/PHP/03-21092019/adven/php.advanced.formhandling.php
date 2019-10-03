<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="post">
        <input type="text" placeholder="nhap ten"name="name">
        <br>
        <input type="text" placeholder="nhap project"name="project">
        <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>

<?php
if($_SERVER["REQUEST_METHOD"]== "POST")
{
    $name=$_POST["name"];
    $project=$_POST["project"];
    echo "ten may la $name va may co du an la $project";
}
?>