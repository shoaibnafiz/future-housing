<?php


$_fullname = $_POST['fullname'];
$_email = $_POST['email'];
$_phone = $_POST['phone'];
$_nid = $_POST['nid'];
$_flat = $_POST['flat'];
$_password = $_POST['password'];
$_registered_at = date("Y-m-d H:i:s", time());
$_status = $_POST['status'];



// Connection to database
$servername = "localhost";
$username = "root";
$password = "";

$conn = new PDO("mysql:host=$servername;dbname=future_housing_db", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



//Insert Query
$query = "INSERT INTO `renters` (`fullname`,`email`,`phone`,`nid`,`flat`,`password`, `registered_at`) VALUES (:fullname, :email, :phone, :nid, :flat, :password, :registered_at)";
// $query = "UPDATE `flats` SET `status` = :status WHERE `flats`.`flat` = :flat";

$stmt = $conn->prepare($query);
$stmt->bindParam(':fullname', $_fullname);
$stmt->bindParam(':email', $_email);
$stmt->bindParam(':phone', $_phone);
$stmt->bindParam(':nid', $_nid);
$stmt->bindParam(':flat', $_flat);
$stmt->bindParam(':password', $_password);
$stmt->bindParam(':registered_at', $_registered_at);

// $stmt = $conn->prepare($query);
// $stmt->bindParam(':status', $_status);


$result = $stmt->execute();

// $result = $stmt->execute();


header("location:register.php");
?>