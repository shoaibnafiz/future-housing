<?php

$_id = $_GET['id'];
$_status = 1;


$servername = "localhost";
$username = "root";
$password = "";

$conn = new PDO("mysql:host=$servername;dbname=future_housing_db", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$query = "UPDATE `tasks` SET `status` = :status WHERE `tasks`.`id` = :id";


$stmt = $conn->prepare($query);
$stmt->bindParam(':id', $_id);
$stmt->bindParam(':status', $_status);
$result = $stmt->execute();

header("location:dashboard-guard.php");

?>