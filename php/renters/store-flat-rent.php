<?php

$_flat = $_POST['flat'];
$_username = $_POST['username'];
$_fullname = $_POST['fullname'];
$_phone = $_POST['phone'];
$_rent = $_POST['rent'];
$_gas_bill = $_POST['gas_bill'];
$_bKash_number = $_POST['bKash_number'];
$_trx_id = $_POST['trx_id'];
$_rented_at = date("Y-m-d H:i:s", time());

$servername = "localhost";
$username = "root";
$password = "";

$conn = new PDO("mysql:host=$servername;dbname=future_housing_db", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


$query = "INSERT INTO `flat_rents` (`flat`,`fullname`,`phone`,`rent`,`gas_bill`,`bKash_number`,`trx_id`, `rented_at`) VALUES (:flat, :fullname, :phone, :rent, :gas_bill, :bKash_number, :trx_id, :rented_at)";

$stmt = $conn->prepare($query);
$stmt->bindParam(':flat', $_flat);
$stmt->bindParam(':fullname', $_fullname);
$stmt->bindParam(':phone', $_phone);
$stmt->bindParam(':rent', $_rent);
$stmt->bindParam(':gas_bill', $_gas_bill);
$stmt->bindParam(':bKash_number', $_bKash_number);
$stmt->bindParam(':trx_id', $_trx_id);
$stmt->bindParam(':rented_at', $_rented_at);

$result = $stmt->execute();


header("location:flat-rent.php?username=" . $_username);

?>