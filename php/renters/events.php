<?php

$_username = $_GET['username'];
$currentPage = "events";

include "../../database.php";

$query = "SELECT * FROM `events`";

$stmt = $conn->prepare($query);
$result = $stmt->execute();
$events = array_reverse($stmt->fetchAll());

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events</title>
    <link rel="shortcut icon" href="../../image/background/a.jpg" />

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
        <?php include "components/nav.php" ?>
        <!-- Navbar End -->
    </header>

    <main>
        <section class="container">
            <h3 class="text-center text-light bg-dark py-3 rounded-3">Events</h3>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3" id="eventss">
                <?php
                foreach ($events as $event):
                    ?>
                <div class="col">
                    <div class="rent-history">
                        <p>Event Date: <strong><?= $event['date']?></strong></p>
                        <p>Event Details: <strong><?= $event['details']?></strong></p>
                    </div>
                </div>
                <?php
                endforeach;
                ?>
            </div>
        </section>
    </main>

    <!-- Bootstrap JS Link -->
    <script src="../../js/bootstrap.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script> -->
</body>

</html>