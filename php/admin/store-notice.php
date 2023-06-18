<?php

    $_date = $_POST['date'];
    $_description = $_POST['description'];


    include "../../database.php";

    $query = "INSERT INTO `notices` (`date`,`description`) VALUES (:date, :description)";

    $stmt = $conn->prepare($query);
    $stmt->bindParam(':date', $_date);
    $stmt->bindParam(':description', $_description);
    $result = $stmt->execute();



    header("location:add-notice.php");
?>