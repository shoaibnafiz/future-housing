<?php

$_username = $_GET['username'];
$_password = $_GET['password'];
$_account_type = $_GET['account_type'];


$servername = "localhost";
$username = "root";
$password = "";

$conn = new PDO("mysql:host=$servername;dbname=future_housing_db", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


if (empty($_username) || empty($_password)) {
    header("location:index.php");
} else {
    $query = "SELECT COUNT(*) AS total FROM `renters` WHERE username LIKE :username AND password LIKE :password";

    $stmt = $conn->prepare($query);
    $stmt->bindParam(':username', $_username);
    $stmt->bindParam(':password', $_password);
    $result = $stmt->execute();

    $totalRenterFound = $stmt->fetch();

    // session_start();
    if ($totalRenterFound['total'] > 0 && $_account_type === "renter") {
        $_SESSION['is_authenticated'] = true;
        header("location:php/renters/dashboard.php?username=" . $_username /*$renter['username']*/);
    } else {
        $_SESSION['is_authenticated'] = false;
        header("location:" . $webroot . "404.php");
    }
}

//Export Query
/* $query = "SELECT * FROM `renters` WHERE (username,password) = (:username, :password)";

$stmt = $conn->prepare($query);
$stmt->bindParam(':username', $_username);
$stmt->bindParam(':password', $_password);
$result = $stmt->execute();
$renter = $stmt->fetch(); */
/* if ($renter['username'] !== $_username) {
    // alert('Incorrect email');
    return header("location:index.php");
} else if ($renter['password'] !== $_password) {
    // alert('Incorrect email');
    return header("location:index.php");
}
if ($renter['username'] === $_username && $renter['password'] === $_password && $_account_type === "renter") {
    header("location:php/renters/dashboard.php?username=" . $renter['username']);
} */

?>