<?php

$_username = $_GET['username'];
$_flat = $_GET['flat'];

$servername = "localhost";
$username = "root";
$password = "";

$conn = new PDO("mysql:host=$servername;dbname=future_housing_db", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


$query = "SELECT * FROM `flat_rents` WHERE flat = :flat";

$stmt = $conn->prepare($query);
$stmt->bindParam(':flat', $_flat);
$result = $stmt->execute();
$rents = $stmt->fetchAll();

$query = "SELECT * FROM `guests` WHERE flat = :flat";

$stmt = $conn->prepare($query);
$stmt->bindParam(':flat', $_flat);
$result = $stmt->execute();
$guests = $stmt->fetchAll();

$query = "SELECT * FROM `tasks` WHERE flat = :flat";

$stmt = $conn->prepare($query);
$stmt->bindParam(':flat', $_flat);
$result = $stmt->execute();
$tasks = $stmt->fetchAll();

$query = "SELECT * FROM `complains` WHERE flat = :flat";

$stmt = $conn->prepare($query);
$stmt->bindParam(':flat', $_flat);
$result = $stmt->execute();
$complains = $stmt->fetchAll();

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
        <nav class="navbar navbar-expand-md bg-body-tertiary">
            <div class="container">
                <h2><a class="navbar-brand" href="dashboard.php?username=<?= $_username; ?>">Future Housing</a>
                </h2>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul id="navbar-nav" class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Flat Rent & Utility Bills</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">All Guests</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Tasks</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Complains</a>
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

        <!-- Guest History Section Start -->
        <section id="history-guests-container" class="container d-none">
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

        <!-- Tasks History Section Start -->
        <section id="history-tasks-container" class="container d-none">
            <h3 class="text-center text-light bg-dark py-3 rounded-3">Tasks History</h3>
            <div id="history-tasks">
                <?php
                foreach ($tasks as $task):
                    ?>
                <div class="rent-history">
                    <p>Task: <strong>
                            <?= $task['task'] ?>
                        </strong></p>
                    <p>Date: <strong>
                            <?= $task['given_at'] ?>
                        </strong></p>
                    <p>Status: <strong>
                            <?php
                            if($task['status'] == 2){
                                echo "Delivered!";
                            }else if($task['status'] == 1){
                                echo "Complete.!!";
                            }else{
                                echo "Pending...";
                            }
                            ?>
                        </strong></p>
                </div>
                <?php
                endforeach;
                ?>
            </div>
        </section>
        <!-- Tasks History Section End -->

        <!-- Complains History Section Start -->
        <section id="history-complains-container" class="container d-none">
            <h3 class="text-center text-light bg-dark py-3 rounded-3">Complains History</h3>
            <div id="history-complains">
                <?php
                foreach ($complains as $complain):
                    ?>
                <div class="rent-history">
                    <p>Complain: <strong>
                            <?= $complain['complain'] ?>
                        </strong></p>
                    <p>Date: <strong>
                            <?= $complain['given_at'] ?>
                        </strong></p>
                    <p>Status: <strong>
                            <?= $complain['status'] == 1 ? "Complete.!!" : "Pending..." ?>
                        </strong></p>
                </div>
                <?php
                endforeach;
                ?>
            </div>
        </section>
        <!-- Complains History Section End -->
    </main>

    <!-- Footer Start -->
    <?php include 'components/footer.php'; ?>
    <!-- Footer End -->

    <!-- Bootstrap JS Link -->
    <script src="../../js/bootstrap.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script> -->
    <!-- <script src="../../js/history.js"></script> -->

    <script>
    document.getElementById('navbar-nav').addEventListener('click', function(e) {
        const historyFlatRentContainer = document.getElementById('history-flat-rent-container');
        const historyTasksContainer = document.getElementById('history-tasks-container');
        const historyComplainsContainer = document.getElementById('history-complains-container');
        const historyGuestsContainer = document.getElementById('history-guests-container');

        const addressLink = e.target.text;
        if (addressLink === "Flat Rent & Utility Bills") {
            historyFlatRentContainer.classList.remove('d-none');
            historyGuestsContainer.classList.add('d-none');
            historyTasksContainer.classList.add('d-none');
            historyComplainsContainer.classList.add('d-none');
        } else if (addressLink === "All Guests") {
            historyFlatRentContainer.classList.add('d-none');
            historyGuestsContainer.classList.remove('d-none');
            historyTasksContainer.classList.add('d-none');
            historyComplainsContainer.classList.add('d-none');
        } else if (addressLink === "Tasks") {
            historyFlatRentContainer.classList.add('d-none');
            historyGuestsContainer.classList.add('d-none');
            historyTasksContainer.classList.remove('d-none');
            historyComplainsContainer.classList.add('d-none');
        } else if (addressLink === "Complains") {
            historyFlatRentContainer.classList.add('d-none');
            historyGuestsContainer.classList.add('d-none');
            historyTasksContainer.classList.add('d-none');
            historyComplainsContainer.classList.remove('d-none');
        }
    })
    </script>
</body>

</html>