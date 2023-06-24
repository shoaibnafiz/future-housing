<?php

$currentPage = "renters";

$webroot = "../../image/";

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
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
    <meta name="author" content="AdminKit">
    <meta name="keywords"
        content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="../../image/background/a.jpg" />

    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link rel="canonical" href="https://demo-basic.adminkit.io/" />

    <title>Renter | Admin Panel</title>

    <link href="../../styles/app.css" rel="stylesheet">
    <link rel="stylesheet" href="../../styles/bootstrap.min.css">
    <link rel="stylesheet" href="../../styles/table-background.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
    <div class="wrapper">

        <?php include "components/sidebar.php"?>


        <div class="main">

            <?php include "components/navbar.php"?>

            <main class="content">
                <div class="container-fluid p-0">

                    <!-- Profile Start -->
                    <section id="profile-container">
                        <div style="background-color: #222e3c;"
                            class="text-light row col-lg-8 border rounded-4 mx-auto p-5 my-5 shadow-lg">

                            <div class="col-md-4 text-center mb-3">
                                <img src="<?= $webroot; ?>users/<?= $renter['picture']; ?>"
                                    class="mt-2 1img-fluid rounded" style="width: 180px; height: 180px;" alt="">
                            </div>
                            <div class="col-md-8">
                                <h2>
                                    <?= $renter['username']; ?>'s Profile
                                </h2>
                                <table class="table table-striped">
                                    <tr>
                                        <th colspan="2">User Details:</th>
                                    </tr>
                                    <tr>
                                        <th><i class="bi bi-person-circle"></i> Name</th>
                                        <td>
                                            <?= $renter['fullname']; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><i class="bi bi-envelope"></i> Email</th>
                                        <td>
                                            <?= $renter['email']; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><i class="bi bi-phone"></i> Phone</th>
                                        <td>
                                            <?= $renter['phone']; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><i class="bi bi-buildings-fill"></i> Flat No</th>
                                        <td>
                                            <?= $renter['flat']; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><i class="bi bi-person-square"></i> NID No</th>
                                        <td>
                                            <?= $renter['nid']; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><i class="bi bi-gender-ambiguous"></i> Gender</th>
                                        <td>
                                            <?= $renter['gender']; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><i class="bi bi-person-badge"></i> Acount Type</th>
                                        <td>Renter</td>
                                    </tr>
                                </table>
                            </div>

                            <div>
                                <a href="renters.php"><button class="mx-auto m-1 btn btn-secondary">Back</button></a>
                            </div>

                        </div>
                    </section>
                    <!-- Profile End -->

                </div>
            </main>

            <!-- Footer Start -->
            <?php include "components/footer.php"?>
            <!-- Footer End -->
        </div>

    </div>

    <script src="../../js/app.js"></script>
    <script src="../../js/datatable.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
        crossorigin="anonymous"></script>

</body>

</html>