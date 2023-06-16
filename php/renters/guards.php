<?php

$currentPage = 'guards';

$_username = $_GET['username'];


include "../../database.php";

$query = "SELECT * FROM `guards`";

$stmt = $conn->prepare($query);
$result = $stmt->execute();
$guards = $stmt->fetchAll();

$query = "SELECT * FROM `renters` WHERE username = :username";

$stmt = $conn->prepare($query);
$stmt->bindParam(':username', $_username);
$result = $stmt->execute();
$renter = $stmt->fetch();
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Guard Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <link rel="stylesheet" href="../../styles/table-background.css">
    <link rel="stylesheet" href="../../styles/bootstrap-icons.css">
    <link rel="stylesheet" href="../../styles/history.css">

</head>

<body>
    <header>
        <!-- Navbar Start -->
        <?php include 'components/nav.php'; ?>
        <!-- Navbar End -->
    </header>

    <main>

        <!-- Guards Details Start -->
        <section>
            <div class="container">
                <div class="row">
                    <?php
                    foreach($guards as $guard):
                    ?>
                    <div class="col-md-6">
                        <div class="bg-danger mt-4 p-3 rounded-4">
                            <h2 class="text-light">
                                <?= $guard['fullname']; ?>'s Details
                            </h2>
                            <table class="table table-striped">
                                <tr>
                                    <th><i class="bi bi-person-circle"></i> Full Name</th>
                                    <td>
                                        <?= $guard['fullname']; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th><i class="bi bi-phone"></i> Phone</th>
                                    <td>
                                        <?= $guard['phone']; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th><i class="bi bi-person-square"></i> NID No</th>
                                    <td>
                                        <?= $guard['nid']; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th><i class="bi bi-gender-ambiguous"></i> Gender</th>
                                    <td>
                                        <?= $guard['gender']; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th><i class="bi bi-person-badge"></i> Acount Type</th>
                                    <td>Guard</td>
                                </tr>
                                <tr>
                                    <th><i class="bi bi-clock-fill"></i> Schedule Starts at</th>
                                    <td>
                                        <?= $guard['start_time']?>
                                    </td>
                                </tr>
                                <tr>
                                    <th><i class="bi bi-clock-fill"></i> Schedule Ends at</th>
                                    <td>
                                        <?= $guard['end_time']?>
                                    </td>
                                </tr>
                            </table>
                        </div>

                    </div>
                    <?php
                    endforeach;
                    ?>

                </div>
            </div>
        </section>
        <!-- Guards Details End -->

    </main>

    <!-- Bootstrap JS Link -->
    <script src="../../js/bootstrap.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script> -->
</body>

</html>