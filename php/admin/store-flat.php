<?php
    // $approot = $_SERVER['DOCUMENT_ROOT'] . "/future-housing/image/";
    $approot = "../../image/";
    $file_name1 = "IMG_" . time() . "-" . $_FILES['picture1']['name'];
    $file_name2 = "IMG_" . time() . "-" . $_FILES['picture2']['name'];
    $file_name3 = "IMG_" . time() . "-" . $_FILES['picture3']['name'];


    $target1 = $_FILES['picture1']['tmp_name'];
    $target2 = $_FILES['picture2']['tmp_name'];
    $target3 = $_FILES['picture3']['tmp_name'];
    $destination1 = $approot . 'flats/' . $file_name1;
    $destination2 = $approot . 'flats/' . $file_name2;
    $destination3 = $approot . 'flats/' . $file_name3;

    $is_file_moved1 = false;
    $is_file_moved2 = false;
    $is_file_moved3 = false;
    if (
        $_FILES['picture1']['type'] == 'image/jpeg' || $_FILES['picture1']['type'] == 'image/jpg' ||
        $_FILES['picture2']['type'] == 'image/jpeg' || $_FILES['picture2']['type'] == 'image/jpg' ||
        $_FILES['picture3']['type'] == 'image/jpeg' || $_FILES['picture3']['type'] == 'image/jpg'
    ) {
        $is_file_moved1 = move_uploaded_file($target1, $destination1);
        $is_file_moved2 = move_uploaded_file($target2, $destination2);
        $is_file_moved3 = move_uploaded_file($target3, $destination3);
    }


    if ($is_file_moved1 && $is_file_moved2 && $is_file_moved3) {
        $_picture1 = $file_name1;
        $_picture2 = $file_name2;
        $_picture3 = $file_name3;
    } else {
        $_picture1 = null;
        $_picture2 = null;
        $_picture3 = null;
    }


    $_flat = $_POST['flat'];
    $_description = $_POST['description'];
    $_rent = $_POST['rent'];
    $_gas_bill = $_POST['gas_bill'];


    include "../../database.php";

    $query = "INSERT INTO `flats` (`flat`,`description`, `rent`, `gas_bill`, `picture1`,`picture2`,`picture3`) VALUES (:flat, :description, :rent, :gas_bill, :picture1, :picture2, :picture3)";

    $stmt = $conn->prepare($query);
    $stmt->bindParam(':flat', $_flat);
    $stmt->bindParam(':description', $_description);
    $stmt->bindParam(':rent', $_rent);
    $stmt->bindParam(':gas_bill', $_gas_bill);
    $stmt->bindParam(':picture1', $_picture1);
    $stmt->bindParam(':picture2', $_picture2);
    $stmt->bindParam(':picture3', $_picture3);
    $result = $stmt->execute();



    header("location:add-flat.php");
?>