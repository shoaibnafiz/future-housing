<?php

$_id = $_GET['id'];
$_status = 1;
/* echo "<pre>";
print_r($_POST);
echo "</pre>";
die(); */

include "../../database.php";

$query = "SELECT * FROM `request_guards` WHERE id = :id";

$stmt = $conn->prepare($query);
$stmt->bindParam(':id', $_id);
$result = $stmt->execute();
$request_guard = $stmt->fetch();

$_fullname = $request_guard['fullname'];
$_username = $request_guard['username'];
$_email = $request_guard['email'];
$_phone = $request_guard['phone'];
$_nid = $request_guard['nid'];
$_password = $request_guard['password'];
$_picture = $request_guard['picture'];
$_registered_at = date("Y-m-d H:i:s", time());



$query = "INSERT INTO `guards` (`fullname`,`username`,`email`,`phone`,`nid`,`password`,`picture`, `registered_at`) VALUES (:fullname, :username, :email, :phone, :nid, :password, :picture, :registered_at)";

$stmt = $conn->prepare($query);
$stmt->bindParam(':fullname', $_fullname);
$stmt->bindParam(':username', $_username);
$stmt->bindParam(':email', $_email);
$stmt->bindParam(':phone', $_phone);
$stmt->bindParam(':nid', $_nid);
$stmt->bindParam(':password', $_password);
$stmt->bindParam(':picture', $_picture);
$stmt->bindParam(':registered_at', $_registered_at);

$result = $stmt->execute();


$query = "DELETE FROM `request_guards` WHERE id = :id";

$stmt = $conn->prepare($query);
$stmt->bindParam(':id', $_id);
$result = $stmt->execute();

header("location:request-guards.php");

?>