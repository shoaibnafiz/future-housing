<?php

$_id = $_GET['id'];

include "../../database.php";

$query = "DELETE FROM `request_renters` WHERE id = :id";

$stmt = $conn->prepare($query);
$stmt->bindParam(':id', $_id);
$result = $stmt->execute();

header("location:request-renters.php");

?>