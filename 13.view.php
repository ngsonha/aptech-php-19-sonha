<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Age</th>
      <th scope="col">Post Counting</th>
      <th scope="col">Salary</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"></th>
      <td></td>
      <td></td>
      <td></td>
    </tr>
   
   
  </tbody>
 
</table>


    <?php
    $authour=[
        [
            "name"=>"ha",
            "age"=>"20",
            "posts_quantity" => "1",
        ],
        [
            "name"=>"tinh",
            "age"=>"20",
            "posts_quantity"=>"2",
        ],
        [
            "name"=>"chi",
            "age"=>"22",
            "posts_quantity" => "3",
        ],
    
        [
            "name"=>"ga",
            "age"=>"49",
            "posts_quantity" => "10",
        ],
    
        [
            "name"=>"khai",
            "age"=>"12",
            "posts_quantity" => "4",
        ],
    ];

    foreach($authour as $key => $value)
    {
        echo implode ($value);
    }
    ?>
</body>
</html>