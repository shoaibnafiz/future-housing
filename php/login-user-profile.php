<?php

$_email = $_GET['email'];
$_password = $_GET['password'];

// Connection to database
$servername = "localhost";
$username = "root";
$password = "";

$conn = new PDO("mysql:host=$servername;dbname=future_housing_db", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


//Export Query

$query = "SELECT * FROM `renters` WHERE (email,password) = (:email, :password)";

$stmt = $conn->prepare($query);
$stmt->bindParam(':email', $_email);
$stmt->bindParam(':password', $_password);
$result = $stmt->execute();
$renters = $stmt->fetchAll();

/* echo "<pre>";
print_r($renters);
echo "</pre>"; */
// echo $renters;


foreach ($renters as $renter) {
    if ($renter['email'] === $_email && $renter['password'] === $_password) {
        header("location:../dashboard.html");
    }
}

?>