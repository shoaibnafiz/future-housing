<?php

$_id = $_GET['id'];
$_flat = $_GET['flat'];
$_status = 0;

include "../../database.php";

$query = "DELETE FROM `guests` WHERE flat = :flat";

$stmt = $conn->prepare($query);
$stmt->bindParam(':flat', $_flat);
$result = $stmt->execute();


$query = "DELETE FROM `complains` WHERE flat = :flat";

$stmt = $conn->prepare($query);
$stmt->bindParam(':flat', $_flat);
$result = $stmt->execute();


$query = "DELETE FROM `tasks` WHERE flat = :flat";

$stmt = $conn->prepare($query);
$stmt->bindParam(':flat', $_flat);
$result = $stmt->execute();


$query = "DELETE FROM `renters` WHERE id = :id";

$stmt = $conn->prepare($query);
$stmt->bindParam(':id', $_id);
$result = $stmt->execute();


$query = "UPDATE `flats` SET `status` = :status WHERE `flats`.`flat` = :flat";

$stmt = $conn->prepare($query);
$stmt->bindParam(':flat', $_flat);
$stmt->bindParam(':status', $_status);

$result = $stmt->execute();


header("location:renters.php");

?>