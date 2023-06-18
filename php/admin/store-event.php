<?php

    $_date = $_POST['date'];
    $_details = $_POST['details'];


    include "../../database.php";

    $query = "INSERT INTO `events` (`date`,`details`) VALUES (:date, :details)";

    $stmt = $conn->prepare($query);
    $stmt->bindParam(':date', $_date);
    $stmt->bindParam(':details', $_details);
    $result = $stmt->execute();



    header("location:add-event.php");
?>