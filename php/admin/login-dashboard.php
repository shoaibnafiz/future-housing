<?php

$_username = $_GET['username'];
$_password = $_GET['password'];


$servername = "localhost";
$username = "root";
$password = "";

$conn = new PDO("mysql:host=$servername;dbname=future_housing_db", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


if (empty($_username) || empty($_password)) {
    header("location:admin.php");
} else {
    $query = "SELECT COUNT(*) AS total FROM `admins` WHERE username LIKE :username AND password LIKE :password";

    $stmt = $conn->prepare($query);
    $stmt->bindParam(':username', $_username);
    $stmt->bindParam(':password', $_password);
    $result = $stmt->execute();

    $totalAdminFound = $stmt->fetch();

    // session_start();
    if ($totalAdminFound['total'] > 0) {
        $_SESSION['is_authenticated'] = true;
        header("location:create-flat.php");
    } else {
        $_SESSION['is_authenticated'] = false;
        header("location:../../admin-error.php");
    }
}

?>