<?php

include "database.php";

$error = isset($_GET['error']) ? $_GET['error'] : '';

if ($error === 'noflat') {
    echo '<script>alert("You didn\'t add Flat");</script>';
} elseif ($error === 'flat') {
    echo '<script>alert("Guard shouldn\'t add Flat");</script>';
} elseif ($error === 'sameuser') {
    echo '<script>alert("Same Username Exist");</script>';
}


//Export Query

$query = "SELECT * FROM `flats` WHERE status = 0";

$stmt = $conn->prepare($query);
$result = $stmt->execute();
$flats = $stmt->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Register</title>
    <link rel="shortcut icon" href="image/background/a.jpg" />

    <link rel="stylesheet" href="styles/register.css">
    <link rel="stylesheet" href="styles/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/bootstrap.min.css">
</head>

<body>

    <!-- register -->

    <section class="welcome">

        <div class="register-background"> </div>

        <div class="container-1">

            <div class="reg-box">

                <div class="form-box login">

                    <form action="create-user-profile.php" method="post">

                        <h1>Sign Up</h1>

                        <div class="input-box">
                            <span class="icon"><i class='bx bxs-user'></i></span>
                            <input type="text" name="fullname" required>
                            <Label>Name</Label>
                        </div>

                        <div class="input-box">
                            <span class="icon"><i class='bx bxs-user'></i></span>
                            <input type="text" name="username" required>
                            <Label>User Name</Label>
                        </div>

                        <div class="input-box">
                            <span class="icon"><i class='bx bxs-envelope'></i></span>
                            <input type="email" name="email" required>
                            <Label>Email</Label>
                        </div>

                        <div class="input-box">
                            <span class="icon"><i class='bx bx-phone'></i></span>
                            <input type="text" name="phone" required>
                            <Label>Phone</Label>
                        </div>

                        <div class="input-box">
                            <span class="icon"><i class='bx bx-id-card'></i></span>
                            <input type="text" name="nid" required>
                            <Label>NID Number</Label>
                        </div>

                        <div class="input-box">

                            <select name="flat" id="flat" class="icon type">

                                <option value=""><?="N/A for Guard"?></option>
                                <?php
                                    if (count($flats) == 0):
                                        ?>
                                <option value=""><?="No Flats Available"?></option>
                                <?php
                                    else:
                                        foreach ($flats as $flat):
                                        ?>

                                <option value="<?= $flat['flat'] ?>"><?= $flat['flat'] ?></option>

                                <?php
                                endforeach;
                            endif;
                                ?>

                            </select>

                            <Label>Flat</Label>

                        </div>

                        <div class="input-box">

                            <select name="account_type" id="account-type" class="icon type">
                                <option value="renter">Renter</option>
                                <option value="guard">Guard</option>
                            </select>

                            <Label>Account Type</Label>

                        </div>

                        <input class="form-check-input" type="hidden" value="1" id="inputStatus" name="status" checked>

                        <div class="input-box">
                            <span class="icon"><i class='bx bxs-lock-alt'></i></span>
                            <input type="password" name="password" required>
                            <Label>Password</Label>
                        </div>



                        <div class="remember-forgot">
                            <label><input type="checkbox" required>&nbsp I agree with <a>Terms & Conditions</a></label>
                        </div>

                        <button type="submit" class="btn-register">Register</button>

                        <div class="using">
                            <Label>----- or sign up with -----</Label>
                        </div>

                        <div class="social-icons-1">
                            <a href="#"><i class='bx bxl-google'></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </div>

                        <div class="login-register">
                            <p>Already have an account? &nbsp<a href="index.php" class="register-link">Sign In</a></p>
                        </div>
                    </form>

                </div>

            </div>

        </div>

    </section>

    <script src="js/bootstrap.min.js"></script>

</body>

</html>