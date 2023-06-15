<?php
$_fullname = $_POST['fullname'];
$_username = $_POST['username'];
$_email = $_POST['email'];
$_phone = $_POST['phone'];
$_nid = $_POST['nid'];
$_flat = $_POST['flat'];
$_password = md5($_POST['password']);
$_picture = "no-image.jpg";
$_requested_at = date("Y-m-d H:i:s", time());
$_status = 1;


include "database.php";

$query = "SELECT * FROM `renters`";

$stmt = $conn->prepare($query);
$result = $stmt->execute();
$renters = $stmt->fetchAll();

foreach ($renters as $renter) {
    if ($renter['username'] === $_username) {
        return header("location: register.php?error=sameuser");
    }
}

$query = "INSERT INTO `request_renters` (`fullname`,`username`,`email`,`phone`,`nid`,`flat`,`password`, `requested_at`) VALUES (:fullname, :username, :email, :phone, :nid, :flat, :password, :requested_at)";

$stmt = $conn->prepare($query);
$stmt->bindParam(':fullname', $_fullname);
$stmt->bindParam(':username', $_username);
$stmt->bindParam(':email', $_email);
$stmt->bindParam(':phone', $_phone);
$stmt->bindParam(':nid', $_nid);
$stmt->bindParam(':flat', $_flat);
$stmt->bindParam(':password', $_password);
$stmt->bindParam(':requested_at', $_requested_at);

$result = $stmt->execute();


header("location:index.php?request=sent");
?>