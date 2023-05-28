<?php

$_username = $_GET['username'];

$servername = "localhost";
$username = "root";
$password = "";

$conn = new PDO("mysql:host=$servername;dbname=future_housing_db", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


$query = "SELECT * FROM `renters` WHERE username = :username";

$stmt = $conn->prepare($query);
$stmt->bindParam(':username', $_username);
$result = $stmt->execute();
$renter = $stmt->fetch();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complains</title>

    <!-- Bootstrap Link -->
    <link rel="stylesheet" href="../../styles/bootstrap.min.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> -->

    <!-- Stylesheet Link -->
    <link rel="stylesheet" href="../../styles/bootstrap-icons.css">
    <link rel="stylesheet" href="../../styles/table-background.css">


</head>

<body>
    <header>
        <!-- Navbar Start -->
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container">
                <h2><a class="navbar-brand" href="dashboard.php?username=<?= $renter['username']; ?>">Future Housing</a>
                </h2>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link" href="dashboard.php?username=<?= $renter['username']; ?>">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="profile-edit.php?username=<?= $renter['username']; ?>">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="flat-rent.php?username=<?= $renter['username']; ?>">Flat Rent</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="invite-guests.php?username=<?= $renter['username']; ?>">Guests</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="tasks.php?username=<?= $renter['username']; ?>">Tasks</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="report.php">Report</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active"
                                href="complains.php?username=<?= $renter['username']; ?>">Complains</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="guards.php">Guards</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../../index.php">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Navbar End -->
    </header>

    <main>

        <!-- Flat Rent Start -->
        <div class="col-md-8 col-lg-5 border rounded-4 mx-auto p-5 my-5 shadow-lg bg-color text-light">
            <h2>Complain Details</h2>
            <form action="store-complain.php" method="post">

                <table class="table table-striped">
                    <tr>
                        <th><i class="bi bi-person-circle"></i> Full Name</th>
                        <td>
                            <input type="text" class="form-control" name="fullname" id="fullname"
                                value="<?= $renter['fullname'] ?>">
                        </td>
                    </tr>
                    <tr>
                        <th><i class="bi bi-phone"></i> Mobile No</th>
                        <td>
                            <input type="text" class="form-control" name="phone" id="phone"
                                value="<?= $renter['phone'] ?>">
                        </td>
                    </tr>
                    <tr>
                        <th><i class="bi bi-buildings-fill"></i> Flat No</th>
                        <td>
                            <input type="text" class="form-control" name="flat" id="flat"
                                value="<?= $renter['flat'] ?>">
                        </td>
                    </tr>
                    <tr>
                        <th><i class="bi bi-person-circle"></i> Complain</th>
                        <td>
                            <textarea class="form-control" rows="3" name="complain" id="complain"></textarea>
                        </td>
                    </tr>
                    <tr class="d-none">
                        <th><i class="bi bi-person-circle"></i> User Name</th>
                        <td>
                            <input type="text" class="form-control" name="username" id="username"
                                value="<?= $renter['username'] ?>">
                        </td>
                    </tr>
                </table>

                <div class="p-2">
                    <button type="submit" class="btn btn-dark float-end">Save</button>
                    <a href="dashboard.php" class="btn btn-secondary">Back</a>
                </div>
            </form>
        </div>
        <!-- Flat Rent End -->
    </main>

    <!-- Footer Start -->
    <footer class="fixed-bottom text-center bg-body-tertiary pt-5 pb-3">
        <p>Copyright <i class="fa-regular fa-copyright"></i> 2023 <strong>Future Housing</strong>. All rights reserved.
        </p>
    </footer>
    <!-- Footer End -->

    <!-- Bootstrap JS Link -->
    <script src="../../js/bootstrap.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script> -->

    <script>

    </script>
</body>

</html>