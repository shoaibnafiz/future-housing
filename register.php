<?php

$servername = "localhost";
$username = "root";
$password = "";

$conn = new PDO("mysql:host=$servername;dbname=future_housing_db", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


//Export Query

$query = "SELECT * FROM `flats`";

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

    <link rel="stylesheet" href="styles/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <!-- register -->

    <section class="welcome">

        <header class="header">

            <nav class="navbar">
                <a href="index.php">Home</a>
                <a href="#">About</a>
                <a href="#">Price</a>
                <a href="#">Services</a>
                <a href="#">Contact</a>
            </nav>

            <form action="#" class="search-bar">
                <input type="text" placeholder="Search...">
                <button type="submit"><i class='bx bx-search'></i></button>
            </form>

        </header>

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

                            <select name="flat" id="acount-type" class="icon type">

                                <?php
                                foreach ($flats as $flat):
                                    if ($flat['status'] == 0):

                                        ?>

                                        <option value="<?= $flat['flat'] ?>"><?= $flat['flat'] ?></option>

                                        <?php
                                    endif;
                                endforeach;
                                ?>

                            </select>

                            <Label>Flat</Label>

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

                        <button type="submit" onclick="return confirm('Confirm Registration?')"
                            class="btn">Register</button>

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
                            <p>Already have an account? &nbsp<a href="index.html" class="register-link">Sign In</a></p>
                        </div>
                    </form>

                </div>

            </div>

        </div>

    </section>

</body>

</html>