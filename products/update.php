<?php
// print_r($_POST);
$approot = $_SERVER['DOCUMENT_ROOT'] . "/crud-11/admin/";

// $_id = $_POST['id'];


if ($_FILES['picture']['name'] != "") {

    $file_name = "IMG_" . time() . "-" . $_FILES['picture']['name'];


    $target = $_FILES['picture']['tmp_name'];
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

} else {
    $_picture = $_POST['old_picture'];
}



$_id = $_POST['id'];
$_title = $_POST['title'];
$_description = $_POST['description'];
// $_picture = $_FILES['picture']['name'];

// Connection to database

$servername = "localhost";
$username = "root";
$password = "";

$conn = new PDO("mysql:host=$servername;dbname=bitm_11", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



//Insert Query

$query = "UPDATE `products` SET `title` = :title, `description` = :description, `picture` = :picture WHERE `products`.`id` = :id";

$stmt = $conn->prepare($query);
$stmt->bindParam(':id', $_id);
$stmt->bindParam(':title', $_title);
$stmt->bindParam(':description', $_description);
$stmt->bindParam(':picture', $_picture);
$result = $stmt->execute();


// var_dump($result);

header("location:index.php");




/* $title = $_POST['title'];
echo $title; */
?>