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
    <div class="container">
        <div class="row mt-2">
            <div class="col-12 ">
                <h1 class="text-center text-success">Bài Tập Về Nhà</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">



          <?php
          $servername = "localhost";
          $username = "root";
          $password = "";
          $db='blog';
          
          
          
          $conn = mysqli_connect($servername, $username, $password,$db, '3307'); //CHO NAY SAI
          
          if (!$conn) {
              die("Connection failed : " . mysqli_connect_error());
              }
              
          $sql= "SELECT * FROM blog.posts as a inner join blog.categories as b  on a.id_categorie =b.id_categorie;";
          $result =$conn->query($sql);
          if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
              
              ?>



            <div class="col-4 mt-5"> 
                    <div class="card" >
                           
                            <div class="card-body">
                              <h2 class="card-title"><?php echo $row['title']?></h3>
                              <b class="card-text"><?php echo $row['description']?></b>
                              <p><?php echo $row['content']?></p>
                            </div>
                          </div>
            </div>
            <?php
  
                }
                } else {
                echo "0 results";
                }
                $conn->close();
                ?>  
           
        </div>
    </div>
    
</body>
</html>