<?php
$_fullname = $_POST['fullname'];
$_username = $_POST['username'];
$_email = $_POST['email'];
$_phone = $_POST['phone'];
$_nid = $_POST['nid'];
$_flat = $_POST['flat'];
$_password = $_POST['password'];
$_picture = "no-image.jpg";
$_registered_at = date("Y-m-d H:i:s", time());
$_status = 1;


// Connection to database
$servername = "localhost";
$username = "root";
$password = "";

$conn = new PDO("mysql:host=$servername;dbname=future_housing_db", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


$query = "SELECT * FROM `renters`";

$stmt = $conn->prepare($query);
$result = $stmt->execute();
$renters = $stmt->fetchAll();

foreach ($renters as $renter) {
    if ($renter['username'] === $_username) {
        return header("location: register.php");
    }
}

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


header("location:index.php");
?>