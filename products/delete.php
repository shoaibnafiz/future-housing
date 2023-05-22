<?php

// $_id = 28;
$_id = $_GET['id'];
// var_dump($_GET);


// Connection to database

$servername = "localhost";
$username = "root";
$password = "";

$conn = new PDO("mysql:host=$servername;dbname=bitm_11", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


//Export Query

$query = "DELETE FROM products WHERE `products`.`id` = :id";

$stmt = $conn->prepare($query);
$stmt->bindParam(':id', $_id);
$result = $stmt->execute();

header("location:index.php");

// var_dump($product);

?>