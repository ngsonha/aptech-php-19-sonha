<?php equire './helper.php';
$conn = connectDatabase();
$sql = "CREATE DATABASE namnh_news";
if ($conn->query($sql) === true) {
echo "Database created successfully";
} else {
echo "Error creating database : " . $conn->error;
}
$conn->close();
?>