<?php
// print_r($_FILES['picture']['tmp_name']);
//Working for image

// print_r($_FILES);
/* echo "<pre>";
echo $_SERVER['DOCUMENT_ROOT']."/crud-11/";
echo "</pre>"; */
// $approot = $_SERVER['DOCUMENT_ROOT'] . "/crud-11/admin/";
// $file_name = $_FILES['picture']['name'];


/* $target = $_FILES['picture']['tmp_name'];
$destination = $approot . 'uploads/' . $file_name;

$is_file_moved = false;
if ($_FILES['picture']['type'] == 'image/jpeg' || $_FILES['picture']['type'] == 'image/png' || $_FILES['picture']['type'] == 'image/jpg') {
    $is_file_moved = move_uploaded_file($target, $destination);
}


if ($is_file_moved) {
    $_picture = $file_name;
} else {
    $_picture = null;
}
 */


$_fullname = $_POST['fullname'];
$_email = $_POST['email'];
$_phone = $_POST['phone'];
$_nid = $_POST['nid'];
$_password = $_POST['password'];

// Connection to database
$servername = "localhost";
$username = "root";
$password = "";

$conn = new PDO("mysql:host=$servername;dbname=future_housing_db", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



//Insert Query

$query = "INSERT INTO `renters` (`fullname`,`email`,`phone`,`nid`,`password`) VALUES (:fullname, :email, :phone, :nid, :password)";

$stmt = $conn->prepare($query);
$stmt->bindParam(':fullname', $_fullname);
$stmt->bindParam(':email', $_email);
$stmt->bindParam(':phone', $_phone);
$stmt->bindParam(':nid', $_nid);
$stmt->bindParam(':password', $_password);
$result = $stmt->execute();



header("location:../register.html");
?>