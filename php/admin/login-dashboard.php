<?php

$_username = $_GET['username'];
$_password = $_GET['password'];


include "../../database.php";


if (empty($_username) || empty($_password)) {
    header("location:../../admin-error.php");
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
        header("location:admin-dashboard.php");
    } else {
        $_SESSION['is_authenticated'] = false;
        header("location:../../admin-error.php");
    }
}

?>