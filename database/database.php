<?php

// Connection to database
$servername = "localhost";
$username = "id20906668_shoaib123";
$password = "#Nafizul1999";

$conn = new PDO("mysql:host=$servername;dbname=id20906668_future_housing_db", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>