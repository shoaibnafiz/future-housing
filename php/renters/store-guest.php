<?php

$_username = $_POST['username'];

$_flat = $_POST['flat'];
$_host_name = $_POST['host_name'];
$_guest_name = $_POST['guest_name'];
$_guest_cell = $_POST['guest_cell'];
$_total_guest = $_POST['total_guest'];
$_visit_purpose = $_POST['visit_purpose'];
$_date = $_POST['date'];
$_time = $_POST['time'];
$_pinCode = $_POST['pinCode'];
$_status = 0;

/* $month = date('F', strtotime($_date));
echo $month;
echo "<pre>";
print_r($_POST);
echo "</pre>";
die(); */

include "../../database.php";

$query = "INSERT INTO `guests` (`flat`,`host_name`,`guest_name`,`guest_cell`,`total_guest`, `visit_purpose`, `date`, `time`, `pinCode`, `status`) VALUES (:flat, :host_name, :guest_name, :guest_cell, :total_guest, :visit_purpose, :date, :time, :pinCode, :status)";

$stmt = $conn->prepare($query);
$stmt->bindParam(':flat', $_flat);
$stmt->bindParam(':host_name', $_host_name);
$stmt->bindParam(':guest_name', $_guest_name);
$stmt->bindParam(':guest_cell', $_guest_cell);
$stmt->bindParam(':total_guest', $_total_guest);
$stmt->bindParam(':visit_purpose', $_visit_purpose);
$stmt->bindParam(':date', $_date);
$stmt->bindParam(':time', $_time);
$stmt->bindParam(':pinCode', $_pinCode);
$stmt->bindParam(':status', $_status);

$result = $stmt->execute();


header("location:invite-guests.php?username=" . $_username);

?>