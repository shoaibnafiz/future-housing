<?php

$_username = $_GET['username'];
$_flat = $_GET['flat'];
$currentPage = "guests";

include "../../database.php";

$query = "SELECT * FROM `guests` WHERE flat = :flat";

$stmt = $conn->prepare($query);
$stmt->bindParam(':flat', $_flat);
$result = $stmt->execute();
$guests = $stmt->fetchAll();

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

        <!-- Guest History Section Start -->
        <section id="history-guests-container" class="container">
            <h3 class="text-center text-light bg-dark py-3 rounded-3">Guests History</h3>
            <div id="history-guests">
                <?php
                foreach ($guests as $guest):
                    ?>
                <div class="rent-history">
                    <p>Guest Name: <strong><?= $guest['guest_name'] ?></strong></p>
                    <p>Guest Cell: <strong><?= $guest['guest_cell'] ?></strong></p>
                    <p>Total Guest: <strong><?= $guest['total_guest'] ?></strong></p>
                    <p>Visit Purpose: <strong><?= $guest['visit_purpose'] ?></strong></p>
                    <p>Date: <strong><?= $guest['date'] ?></strong></p>
                    <p>Time: <strong><?= $guest['time'] ?></strong></p>
                </div>
                <?php
                endforeach;
                ?>
            </div>
        </section>
        <!-- Guest History Section End -->

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