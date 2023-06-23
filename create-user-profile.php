<?php
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
    $query = "INSERT INTO `request_renters` (`fullname`,`username`,`email`,`phone`,`nid`,`flat`,`password`, `picture`, `requested_at`) VALUES (:fullname, :username, :email, :phone, :nid, :flat, :password, :picture, :requested_at)";

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

    $result = $stmt->execute();

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
}


header("location:index.php?request=sent");
?>