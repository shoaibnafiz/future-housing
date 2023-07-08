<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';


$_fullname = $_POST['fullname'];
$_username = $_POST['username'];
$_email = $_POST['email'];
$_phone = $_POST['phone'];
$_nid = $_POST['nid'];
$_flat = $_POST['flat'];
$_password = md5($_POST['password']);
$_account_type = $_POST['account_type'];
$_picture = "no-image.jpg";
$_requested_at = date("Y-m-d H:i:s", time());
$_code = md5(rand());
$_status = 1;


include "database.php";

$query = "SELECT * FROM `renters`";

$stmt = $conn->prepare($query);
$result = $stmt->execute();
$renters = $stmt->fetchAll();

foreach ($renters as $renter) {
    if ($renter['username'] === $_username && $_account_type === 'renter') {
        return header("location: register.php?error=sameuser");
    }
}

$query = "SELECT * FROM `guards`";

$stmt = $conn->prepare($query);
$result = $stmt->execute();
$guards = $stmt->fetchAll();

foreach ($guards as $guard) {
    if ($guard['username'] === $_username && $_account_type === 'guard') {
        return header("location: register.php?error=sameuser");
    }
}

if($_account_type == 'renter'){
    if (empty($_flat)) {
        return header("location: register.php?error=noflat");
    }
    $query = "INSERT INTO `request_renters` (`fullname`,`username`,`email`,`phone`,`nid`,`flat`,`password`, `picture`, `requested_at`, `code`) VALUES (:fullname, :username, :email, :phone, :nid, :flat, :password, :picture, :requested_at, :code)";

    $stmt = $conn->prepare($query);
    $stmt->bindParam(':fullname', $_fullname);
    $stmt->bindParam(':username', $_username);
    $stmt->bindParam(':email', $_email);
    $stmt->bindParam(':phone', $_phone);
    $stmt->bindParam(':nid', $_nid);
    $stmt->bindParam(':flat', $_flat);
    $stmt->bindParam(':password', $_password);
    $stmt->bindParam(':picture', $_picture);
    $stmt->bindParam(':requested_at', $_requested_at);
    $stmt->bindParam(':code', $_code);

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
            $mail->Body    = 'Here is the verification link <b><a href="http://localhost/future-housing/?verification='.$_code.'">http://localhost/future-housing/?verification='.$_code.'</a></b>';

            $mail->send();
        } catch (Exception $e) {
            return header("location: 404.php");
        }
    } else {
        return header("location: 404.php");
    }

}else{
    if (isset($_flat)) {
        return header("location: register.php?error=flat");
    }
    $query = "INSERT INTO `request_guards` (`fullname`,`username`,`email`,`phone`,`nid`,`password`, `picture`, `requested_at`) VALUES (:fullname, :username, :email, :phone, :nid, :password, :picture, :requested_at)";

    $stmt = $conn->prepare($query);
    $stmt->bindParam(':fullname', $_fullname);
    $stmt->bindParam(':username', $_username);
    $stmt->bindParam(':email', $_email);
    $stmt->bindParam(':phone', $_phone);
    $stmt->bindParam(':nid', $_nid);
    $stmt->bindParam(':password', $_password);
    $stmt->bindParam(':picture', $_picture);
    $stmt->bindParam(':requested_at', $_requested_at);

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
            $mail->Body    = 'Here is the verification link <b><a href="http://localhost/future-housing/?verification='.$_code.'">http://localhost/future-housing/?verification='.$_code.'</a></b>';

            $mail->send();
        } catch (Exception $e) {
            return header("location: 404.php");
        }
    } else {
        return header("location: 404.php");
    }
}


header("location:http://localhost/future-housing/?request=sent");
?>