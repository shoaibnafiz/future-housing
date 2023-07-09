<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require '../../vendor/autoload.php';


$_id = $_GET['id'];

include "../../database.php";

$query = "SELECT * FROM `request_guards` WHERE id = :id";

$stmt = $conn->prepare($query);
$stmt->bindParam(':id', $_id);
$result = $stmt->execute();
$request_guard = $stmt->fetch();

$_fullname = $request_guard['fullname'];
$_username = $request_guard['username'];
$_email = $request_guard['email'];
$_phone = $request_guard['phone'];
$_nid = $request_guard['nid'];
$_password = $request_guard['password'];
$_picture = $request_guard['picture'];
$_registered_at = date("Y-m-d H:i:s", time());



$query = "INSERT INTO `guards` (`fullname`,`username`,`email`,`phone`,`nid`,`password`,`picture`, `registered_at`) VALUES (:fullname, :username, :email, :phone, :nid, :password, :picture, :registered_at)";

$stmt = $conn->prepare($query);
$stmt->bindParam(':fullname', $_fullname);
$stmt->bindParam(':username', $_username);
$stmt->bindParam(':email', $_email);
$stmt->bindParam(':phone', $_phone);
$stmt->bindParam(':nid', $_nid);
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
        $mail->Body    = 'Your Request as Guard in Future Housing is <b>Accepted</b>. Please Login from <b><a href="http://localhost/future-housing/">Here</a></b>';

        $mail->send();
    } catch (Exception $e) {
        return header("location: 404.php");
    }
} else {
    return header("location: 404.php");
}


$query = "DELETE FROM `request_guards` WHERE id = :id";

$stmt = $conn->prepare($query);
$stmt->bindParam(':id', $_id);
$result = $stmt->execute();

header("location:request-guards.php");

?>