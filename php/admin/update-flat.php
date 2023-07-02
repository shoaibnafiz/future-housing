<?php
    // $approot = $_SERVER['DOCUMENT_ROOT'] . "/future-housing/image/";
    $approot = "../../image/";

    if ($_FILES['picture1']['name'] != "") {

        $file_name = "IMG_" . time() . "_" . $_FILES['picture1']['name'];
    
    
        $target = $_FILES['picture1']['tmp_name'];
        $destination = $approot . 'flats/' . $file_name;
    
        $is_file_moved = false;
        if ($_FILES['picture1']['type'] == 'image/jpeg' || $_FILES['picture1']['type'] == 'image/png' || $_FILES['picture1']['type'] == 'image/jpg') {
            $is_file_moved = move_uploaded_file($target, $destination);
        }
    
    
        if ($is_file_moved) {
            $_picture1 = $file_name;
        } else {
            $_picture1 = null;
        }
    
    } else {
        $_picture1 = $_POST['old_picture1'];
    }

    if ($_FILES['picture2']['name'] != "") {

        $file_name = "IMG_" . time() . "_" . $_FILES['picture2']['name'];
    
    
        $target = $_FILES['picture2']['tmp_name'];
        $destination = $approot . 'flats/' . $file_name;
    
        $is_file_moved = false;
        if ($_FILES['picture2']['type'] == 'image/jpeg' || $_FILES['picture2']['type'] == 'image/png' || $_FILES['picture2']['type'] == 'image/jpg') {
            $is_file_moved = move_uploaded_file($target, $destination);
        }
    
    
        if ($is_file_moved) {
            $_picture2 = $file_name;
        } else {
            $_picture2 = null;
        }
    
    } else {
        $_picture2 = $_POST['old_picture2'];
    }
    
    if ($_FILES['picture3']['name'] != "") {

        $file_name = "IMG_" . time() . "_" . $_FILES['picture3']['name'];
    
    
        $target = $_FILES['picture3']['tmp_name'];
        $destination = $approot . 'flats/' . $file_name;
    
        $is_file_moved = false;
        if ($_FILES['picture3']['type'] == 'image/jpeg' || $_FILES['picture3']['type'] == 'image/png' || $_FILES['picture3']['type'] == 'image/jpg') {
            $is_file_moved = move_uploaded_file($target, $destination);
        }
    
    
        if ($is_file_moved) {
            $_picture3 = $file_name;
        } else {
            $_picture3 = null;
        }
    
    } else {
        $_picture3 = $_POST['old_picture3'];
    }


    $_id = $_POST['id'];
    $_flat = $_POST['flat'];
    $_description = $_POST['description'];
    $_rent = $_POST['rent'];
    $_gas_bill = $_POST['gas_bill'];


    include "../../database.php";

    $query = "UPDATE `flats` SET `flat` = :flat, `description` = :description, `rent` = :rent, `gas_bill` = :gas_bill, `picture1` = :picture1, `picture2` = :picture2, `picture3` = :picture3 WHERE `flats`.`id` = :id";

    $stmt = $conn->prepare($query);
    $stmt->bindParam(':id', $_id);
    $stmt->bindParam(':flat', $_flat);
    $stmt->bindParam(':description', $_description);
    $stmt->bindParam(':rent', $_rent);
    $stmt->bindParam(':gas_bill', $_gas_bill);
    $stmt->bindParam(':picture1', $_picture1);
    $stmt->bindParam(':picture2', $_picture2);
    $stmt->bindParam(':picture3', $_picture3);
    $result = $stmt->execute();



    header("location:modify-flat.php?id=$_id");
?>