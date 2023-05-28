<?php
$webroot = "http://localhost/future-housing/image/";
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
    <title>Edit Profile</title>

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
                <h2><a class="navbar-brand" href="dashboard.php?username=<?= $renter['username']; ?>">Future
                        Housing</a>
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
                            <a class="nav-link active"
                                href="profile-edit.php?username=<?= $renter['username']; ?>">Profile</a>
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
                            <a class="nav-link" href="complains.php?username=<?= $renter['username']; ?>">Complains</a>
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

        <!-- Edit Profile Start -->
        <div class="row col-md-10 col-lg-8 border rounded-4 mx-auto p-5 my-5 shadow-lg bg-color text-light">
            <form class="row row-cols-sm-1 row-cols-md-2" action="update-user-profile.php" method="post"
                enctype="multipart/form-data">
                <div class="col col-lg-4 text-center mb-3">
                    <img src="<?= $webroot; ?>users/<?= $renter['picture']; ?>" class="js-image m-2 1img-fluid rounded"
                        style="width: 180px; height: 180px;" alt="">
                    <label for="formFile" class="form-label">Click below to select an image</label>
                    <div class="row text-center">
                        <div class="col">
                            <input type="file" class="form-control" name="picture" value="">
                            <input type="hidden" name="old_picture" value="<?= $renter['picture']; ?>">
                        </div>
                    </div>
                </div>
                <div class="col col-lg-8">
                    <h2>
                        <?= $renter['username'] ?>'s' Profile
                    </h2>
                    <table class="table table-striped">
                        <tr>
                            <th colspan="2">User Details:</th>
                        </tr>
                        <tr class="d-none">
                            <th><i class="bi bi-person-circle"></i> User Name</th>
                            <td>
                                <input type="text" class="form-control" name="username" id="username"
                                    value="<?= $renter['username'] ?>">
                            </td>
                        </tr>
                        </tr>
                        <tr>
                            <th><i class="bi bi-person-circle"></i> Full Name</th>
                            <td>
                                <input type="text" class="form-control" name="fullname" id="fullname"
                                    value="<?= $renter['fullname'] ?>">
                            </td>
                        </tr>
                        <tr>
                            <th><i class="bi bi-envelope"></i> Email</th>
                            <td>
                                <input type="email" class="form-control" name="email" id="email"
                                    value="<?= $renter['email'] ?>">
                            </td>
                        </tr>
                        <tr>
                            <th><i class="bi bi-phone"></i> Phone</th>
                            <td>
                                <input type="text" class="form-control" name="phone" id="phone"
                                    value="<?= $renter['phone'] ?>">
                            </td>
                        </tr>
                        <tr>
                            <th><i class="bi bi-gender-ambiguous"></i> Gender</th>
                            <td>
                                <select name="gender" id="gender" class="form-select mb-3"
                                    aria-label=".form-select example">
                                    <option selected value="<?= $renter['gender'] ?>">--Select Gender--</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </td>
                        </tr>
                    </table>

                    <div class="p-2">
                        <button class="btn btn-dark float-end">Save</button>
                        <a href="dashboard.php?username=<?= $renter['username'] ?>" class="btn btn-secondary">Back</a>
                    </div>

                </div>
            </form>
        </div>
        <!-- Edit Profile End -->
    </main>

    <!-- Footer Start -->
    <footer class="text-center bg-body-tertiary pt-5 pb-3">
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