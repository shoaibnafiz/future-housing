<?php



$approot = $_SERVER['DOCUMENT_ROOT'] . "/future-housing/image/";
$file_name = "IMG_" . time() . "-" . $_FILES['picture']['name'];


$target = $_FILES['picture']['tmp_name'];
$destination = $approot . 'flats/' . $file_name;

$is_file_moved = false;
if ($_FILES['picture']['type'] == 'image/jpeg' || $_FILES['picture']['type'] == 'image/jpg') {
    $is_file_moved = move_uploaded_file($target, $destination);
}


if ($is_file_moved) {
    $_picture = $file_name;
} else {
    $_picture = null;
}


$_flat = $_POST['flat'];
$_description = $_POST['description'];

/* if(array_key_exists('is_active', $_POST)){
    $_is_active = $_POST['is_active'];
}else{
    $_is_active = 0;
}
 */

// Connection to database

$servername = "localhost";
$username = "root";
$password = "";

$conn = new PDO("mysql:host=$servername;dbname=future_housing_db", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



//Insert Query

$query = "INSERT INTO `flats` (`flat`,`description`,`picture`) VALUES (:flat, :description, :picture)";

$stmt = $conn->prepare($query);
$stmt->bindParam(':flat', $_flat);
$stmt->bindParam(':description', $_description);
$stmt->bindParam(':picture', $_picture);
// $stmt->bindParam(':is_active', $_is_active);
$result = $stmt->execute();


// var_dump($result);

header("location:create.php");




/* $title = $_POST['title'];
echo $title; */
?>