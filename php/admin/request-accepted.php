<?php

$_id = $_GET['id'];
$_status = 1;


include "../../database.php";

$query = "SELECT * FROM `request_renters` WHERE id = :id";

$stmt = $conn->prepare($query);
$stmt->bindParam(':id', $_id);
$result = $stmt->execute();
$request_renter = $stmt->fetch();

$_fullname = $request_renter['fullname'];
$_username = $request_renter['username'];
$_email = $request_renter['email'];
$_phone = $request_renter['phone'];
$_nid = $request_renter['nid'];
$_flat = $request_renter['flat'];
$_password = $request_renter['password'];
$_registered_at = date("Y-m-d H:i:s", time());



$query = "INSERT INTO `renters` (`fullname`,`username`,`email`,`phone`,`nid`,`flat`,`password`,`picture`, `registered_at`) VALUES (:fullname, :username, :email, :phone, :nid, :flat, :password, :picture, :registered_at)";

$stmt = $conn->prepare($query);
$stmt->bindParam(':fullname', $_fullname);
$stmt->bindParam(':username', $_username);
$stmt->bindParam(':email', $_email);
$stmt->bindParam(':phone', $_phone);
$stmt->bindParam(':nid', $_nid);
$stmt->bindParam(':flat', $_flat);
$stmt->bindParam(':password', $_password);
$stmt->bindParam(':picture', $_picture);
$stmt->bindParam(':registered_at', $_registered_at);

$result = $stmt->execute();


$query = "UPDATE `flats` SET `status` = :status WHERE `flats`.`flat` = :flat";

$stmt = $conn->prepare($query);
$stmt->bindParam(':flat', $_flat);
$stmt->bindParam(':status', $_status);

$result = $stmt->execute();

$query = "DELETE FROM `request_renters` WHERE id = :id";

$stmt = $conn->prepare($query);
$stmt->bindParam(':id', $_id);
$result = $stmt->execute();

header("location:request-renters.php");

?>