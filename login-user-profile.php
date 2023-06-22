<?php

$_username = $_GET['username'];
$_password = md5($_GET['password']);
$_account_type = $_GET['account_type'];

include "database.php";

if (empty($_username) || empty($_password)) {
    header("location:index.php");
} else if($_account_type === 'renter') {
    $query = "SELECT COUNT(*) AS total FROM `renters` WHERE username LIKE :username AND password LIKE :password";

    $stmt = $conn->prepare($query);
    $stmt->bindParam(':username', $_username);
    $stmt->bindParam(':password', $_password);
    $result = $stmt->execute();

    $totalRenterFound = $stmt->fetch();

    // session_start();
    if ($totalRenterFound['total'] > 0) {
        $_SESSION['is_authenticated'] = true;
        header("location:php/renters/dashboard.php?username=" . $_username);
    } else {
        $_SESSION['is_authenticated'] = false;
        header("location:404.php");
    }
} else {
    $query = "SELECT COUNT(*) AS total FROM `guards` WHERE username LIKE :username AND password LIKE :password";

    $stmt = $conn->prepare($query);
    $stmt->bindParam(':username', $_username);
    $stmt->bindParam(':password', $_password);
    $result = $stmt->execute();

    $totalGuardFound = $stmt->fetch();

    if ($totalGuardFound['total'] > 0) {
        $_SESSION['is_authenticated'] = true;
        header("location:php/guards/guard-dashboard.php?username=" . $_username);
    } else {
        $_SESSION['is_authenticated'] = false;
        header("location:404.php");
    }
}

?>