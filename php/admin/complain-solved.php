<?php

$_id = $_GET['id'];
$_status = 1;


include "../../database.php";

$query = "UPDATE `complains` SET `status` = :status WHERE `complains`.`id` = :id";


$stmt = $conn->prepare($query);
$stmt->bindParam(':id', $_id);
$stmt->bindParam(':status', $_status);
$result = $stmt->execute();

header("location:complains.php");

?>