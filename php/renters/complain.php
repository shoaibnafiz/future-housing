<?php

$currentPage = 'complain';

$_username = $_GET['username'];


include "../../database.php";

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
    <title>Complain</title>
    <link rel="shortcut icon" href="../../image/background/a.jpg" />

    <!-- Bootstrap Link -->
    <link rel="stylesheet" href="../../styles/bootstrap.min.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> -->

    <!-- Stylesheet Link -->
    <link rel="stylesheet" href="../../styles/bootstrap-icons.css">
    <link rel="stylesheet" href="../../styles/table-background.css">
    <link rel="stylesheet" href="../../styles/history.css">


</head>

<body>
    <header>
        <!-- Navbar Start -->
        <?php include 'components/nav.php'; ?>
        <!-- Navbar End -->
    </header>

    <main>

        <div class="container my-4">
            <h6 class="d-flex justify-content-center">If You have any problem in your Appartment, then let us know.
                We'll try
                to fix this.</h6>
        </div>
        <!-- Complain Start -->
        <div class="col-md-8 col-lg-5 border rounded-4 mx-auto p-5 my-5 shadow-lg bg-danger text-light">
            <h2>Complain:</h2>
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
                        <th><i class="bi bi-list-task"></i> Complain</th>
                        <td>
                            <textarea class="form-control" rows="3" name="complain" id="complain" required></textarea>
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
                    <a href="dashboard.php?username=<?= $renter['username'] ?>" class="btn btn-secondary">Back</a>
                </div>
            </form>
        </div>
        <!-- Complain End -->
    </main>

    <!-- Footer Start -->
    <?php include 'components/footer.php'; ?>
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