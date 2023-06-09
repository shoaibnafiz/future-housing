<?php

$_username = $_GET['username'];
$_flat = $_GET['flat'];
$currentPage = "tasks";

include "../../database.php";

$query = "SELECT * FROM `tasks` WHERE flat = :flat";

$stmt = $conn->prepare($query);
$stmt->bindParam(':flat', $_flat);
$result = $stmt->execute();
$tasks = $stmt->fetchAll();

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

        <!-- Tasks History Section Start -->
        <section id="history-tasks-container" class="container">
            <h3 class="text-center text-light bg-dark py-3 rounded-3">Tasks History</h3>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3" id="history-tasks">
                <?php
                foreach ($tasks as $task):
                    ?>
                <div class="col">
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
                </div>
                <?php
                endforeach;
                ?>
            </div>
        </section>
        <!-- Tasks History Section End -->

    </main>

    <!-- Footer Start -->
    <!-- <?php include 'components/footer.php'; ?> -->
    <!-- Footer End -->

    <!-- Bootstrap JS Link -->
    <script src="../../js/bootstrap.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script> -->

</body>

</html>