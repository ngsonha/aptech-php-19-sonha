<?php 
$servername="localhost";
$username="root";
$password="";
$db="blog";

$conn = mysqli_connect($servername, $username, $password, $db, '3307'); //CHO NAY SAI

if (!$conn) {
    die("Connection failed : " . mysqli_connect_error());
    }
$sql = "SELECT * FROM  blog.categories ";
    $result =$conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
        echo " " . $row["id_categorie"] . " " . $row["name_cata"] .  "<br>";
        }
        } else {
        echo "0 results";
        }
        $conn->close();

        
?>