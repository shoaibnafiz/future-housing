<?php

$_username = $_GET['username'];
$_flat = $_GET['flat'];
$currentPage = "flat-rents";

include "../../database.php";

$query = "SELECT * FROM `flat_rents` WHERE flat = :flat";

$stmt = $conn->prepare($query);
$stmt->bindParam(':flat', $_flat);
$result = $stmt->execute();
$rents = $stmt->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>History</title>

    <!-- Bootstrap Link -->
    <link rel="stylesheet" href="../../styles/bootstrap.min.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> -->
    <!-- Stylesheet Link -->
    <link rel="stylesheet" href="../../styles/history.css">
</head>

<body>

    <header>
        <!-- Navbar Start -->
        <?php include "components/history-nav.php" ?>
        <!-- Navbar End -->
    </header>

    <main>

        <!-- Flat Rent History Section Start -->
        <section id="history-flat-rent-container" class="container">
            <h3 class="text-center text-light bg-dark py-3 rounded-3">Flat Rent History</h3>
            <div id="history-flat-rent">
                <?php
                foreach ($rents as $rent):
                    ?>
                <div class="rent-history">
                    <p>Rent Amount: TK<strong>
                            <?= $rent['rent'] ?>
                        </strong></p>
                    <p>Gas Bill: TK<strong>
                            <?= $rent['gas_bill'] ?>
                        </strong></p>
                    <p>Date of Rent: <strong>
                            <?= $rent['rented_at'] ?>
                        </strong></p>
                    <p>Bkash Cell: <strong>
                            <?= $rent['bKash_number'] ?>
                        </strong></p>
                    <p>Bkash Trx ID: <strong>
                            <?= $rent['trx_id'] ?>
                        </strong></p>
                    <!-- <p>Date: <strong>${flatRent.date}</strong></p>
                    <p>Time: <strong>${flatRent.time}</strong></p> -->
                </div>
                <?php
                endforeach;
                ?>
            </div>
        </section>
        <!-- Flat Rent History Section End -->

    </main>

    <!-- Footer Start -->
    <?php include 'components/footer.php'; ?>
    <!-- Footer End -->

    <!-- Bootstrap JS Link -->
    <script src="../../js/bootstrap.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script> -->

</body>

</html>