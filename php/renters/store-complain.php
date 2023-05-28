<?php

$_flat = $_POST['flat'];
$_username = $_POST['username'];
$_fullname = $_POST['fullname'];
$_phone = $_POST['phone'];
$_complain = $_POST['complain'];
$_given_at = date("Y-m-d H:i:s", time());
$_status = 0;

$servername = "localhost";
$username = "root";
$password = "";

$conn = new PDO("mysql:host=$servername;dbname=future_housing_db", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


$query = "INSERT INTO `complains` (`flat`,`fullname`,`phone`,`complain`, `given_at`, `status`) VALUES (:flat, :fullname, :phone, :complain, :given_at, :status)";

$stmt = $conn->prepare($query);
$stmt->bindParam(':flat', $_flat);
$stmt->bindParam(':fullname', $_fullname);
$stmt->bindParam(':phone', $_phone);
$stmt->bindParam(':complain', $_complain);
$stmt->bindParam(':given_at', $_given_at);
$stmt->bindParam(':status', $_status);

$result = $stmt->execute();


header("location:complains.php?username=" . $_username);

?>