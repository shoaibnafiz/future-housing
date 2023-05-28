<?php

$approot = $_SERVER['DOCUMENT_ROOT'] . "/future-housing/image/";


if ($_FILES['picture']['name'] != "") {

    $file_name = "IMG_" . time() . "_" . $_FILES['picture']['name'];


    $target = $_FILES['picture']['tmp_name'];
    $destination = $approot . 'users/' . $file_name;

    $is_file_moved = false;
    if ($_FILES['picture']['type'] == 'image/jpeg' || $_FILES['picture']['type'] == 'image/png' || $_FILES['picture']['type'] == 'image/jpg') {
        $is_file_moved = move_uploaded_file($target, $destination);
    }


    if ($is_file_moved) {
        $_picture = $file_name;
    } else {
        $_picture = null;
    }

} else {
    $_picture = $_POST['old_picture'];
}


$_username = $_POST['username'];
$_fullname = $_POST['fullname'];
$_email = $_POST['email'];
$_phone = $_POST['phone'];
$_gender = $_POST['gender'];


$servername = "localhost";
$username = "root";
$password = "";

$conn = new PDO("mysql:host=$servername;dbname=future_housing_db", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



$query = "UPDATE `renters` SET `fullname` = :fullname, `email` = :email, `picture` = :picture, `phone` = :phone, `gender` = :gender WHERE `renters`.`username` = :username";

$stmt = $conn->prepare($query);
$stmt->bindParam(':username', $_username);
$stmt->bindParam(':fullname', $_fullname);
$stmt->bindParam(':email', $_email);
$stmt->bindParam(':phone', $_phone);
$stmt->bindParam(':picture', $_picture);
$stmt->bindParam(':gender', $_gender);
$result = $stmt->execute();

header("location:profile-edit.php?username=" . $_username);

?>