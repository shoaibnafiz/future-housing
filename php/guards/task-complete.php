<?php

$_id = $_GET['id'];
$_status = 1;


include "../../database.php";

$query = "UPDATE `tasks` SET `status` = :status WHERE `tasks`.`id` = :id";


$stmt = $conn->prepare($query);
$stmt->bindParam(':id', $_id);
$stmt->bindParam(':status', $_status);
$result = $stmt->execute();

header("location:guard-dashboard.php");

?>