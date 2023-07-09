<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require '../../vendor/autoload.php';


$_id = $_GET['id'];
$_status = 1;


include "../../database.php";

$query = "SELECT * FROM `request_renters` WHERE id = :id";

$stmt = $conn->prepare($query);
$stmt->bindParam(':id', $_id);
$result = $stmt->execute();
$request_renter = $stmt->fetch();

$_fullname = $request_renter['fullname'];
$_username = $request_renter['username'];
$_email = $request_renter['email'];
$_phone = $request_renter['phone'];
$_nid = $request_renter['nid'];
$_flat = $request_renter['flat'];
$_password = $request_renter['password'];
$_picture = $request_renter['picture'];
$_registered_at = date("Y-m-d H:i:s", time());



$query = "INSERT INTO `renters` (`fullname`,`username`,`email`,`phone`,`nid`,`flat`,`password`,`picture`, `registered_at`) VALUES (:fullname, :username, :email, :phone, :nid, :flat, :password, :picture, :registered_at)";

$stmt = $conn->prepare($query);
$stmt->bindParam(':fullname', $_fullname);
$stmt->bindParam(':username', $_username);
$stmt->bindParam(':email', $_email);
$stmt->bindParam(':phone', $_phone);
$stmt->bindParam(':nid', $_nid);
$stmt->bindParam(':flat', $_flat);
$stmt->bindParam(':password', $_password);
$stmt->bindParam(':picture', $_picture);
$stmt->bindParam(':registered_at', $_registered_at);

$result = $stmt->execute();

if ($result) {
    $mail = new PHPMailer(true);

    try {
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'naimul.dihan.7@gmail.com';
        $mail->Password   = 'mkkbdofrsjzidwps';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = 465;

        //Recipients
        $mail->setFrom('naimul.dihan.7@gmail.com');
        $mail->addAddress($_email);

        //Content
        $mail->isHTML(true);
        $mail->Subject = 'no reply';
        $mail->Body    = 'Your Request as Renter in Future Housing is <b>Accepted</b>. Please Login from <b><a href="http://localhost/future-housing/">Here</a></b>';

        $mail->send();
    } catch (Exception $e) {
        return header("location: 404.php");
    }
} else {
    return header("location: 404.php");
}


$query = "UPDATE `flats` SET `status` = :status WHERE `flats`.`flat` = :flat";

$stmt = $conn->prepare($query);
$stmt->bindParam(':flat', $_flat);
$stmt->bindParam(':status', $_status);

$result = $stmt->execute();

$query = "DELETE FROM `request_renters` WHERE id = :id";

$stmt = $conn->prepare($query);
$stmt->bindParam(':id', $_id);
$result = $stmt->execute();

header("location:request-renters.php");

?>