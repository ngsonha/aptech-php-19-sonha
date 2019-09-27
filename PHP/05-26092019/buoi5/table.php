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
        <div class="row">
            <div class="col-12">
            <table class="table table-hover table-bordered">
            
            <thead>
            <tr>
            <th class="text-center" >#</th>
            <th class="text-center">name</th>
            <th class="text-center">email</th>
            <th class="text-center">action</th>
            </tr>
            </thead>




            <tbody>
            
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $db="lamlaibt";
          $conn = mysqli_connect($servername, $username, $password, $db, '3307'); //CHO NAY SAI

            if (!$conn) {
                        die("Connection failed : " . mysqli_connect_error());
                        }
            $sql = "SELECT * FROM user ";
            $result =$conn->query($sql);
            if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
            echo "<tr >";
            echo "<td>" . $row["id"] . "</td> " ;
            echo "<td>". $row["email"] . "</td> " ;
            echo "<td>". $row["password"] . "</td>" ;
            echo "</tr>";
        }
        } else {
        echo "0 results";
        }
        $conn->close();
         ?>  
         
            </tbody>

            </table>
            </div>
        </div>
    </div>
</body>
</html>


<!-- create database blog ;
create table blog.posts(
id_post int not null auto_increment primary key,
title varchar(255),
description varchar(255),
content text,
id_cata int 

);
create table blog.categories(
id_categorie int not null auto_increment primary key,
name_cata varchar(255)
);
insert into blog.categories values
(1,'phap luat'),
(2,'khoa hoc va cong nghe'),
(3,'kinh te xa hoi'),
(4,'doi song'),
(5,'xe'),
(6,'chinh tri'),
(7,'the gioi'),
(8,'suc khoe'),
(9,'giao duc'),
(10,'chinh tri');

insert into blog.posts values
(1,'dam chem cuop hiep','thieu nu 15 tuoi bi hiep','abcxyz gau gau hihihhahahah a du`',1),
(2,'o nhiem moi truong ','dat ban','abcxyz gau gau hihihhahahah a du`',8),
(3,'xe audi ','audi ra mat sp ','abcxyz gau gau hihihhahahah a du`',5),
(4,'sinh nhat bac ho','15-9','abcxyz gau gau hihihhahahah a du`',10);

SELECT * FROM blog.posts as a inner join blog.categories as b  on a.id_post =b.id_categorie; -->








