<?php

$_id = $_GET['id'];
$_username = $_GET['username'];
$_status = 1;


include "../../database.php";

$query = "UPDATE `guests` SET `status` = :status WHERE `guests`.`id` = :id";


$stmt = $conn->prepare($query);
$stmt->bindParam(':id', $_id);
$stmt->bindParam(':status', $_status);
$result = $stmt->execute();

header("location:find-guests.php?username=$_username");

?>