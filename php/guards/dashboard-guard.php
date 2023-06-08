<?php

$currentPage = 'home';


include "../../database.php";

$query = "SELECT * FROM `tasks`";

$stmt = $conn->prepare($query);
$result = $stmt->execute();
$tasks = $stmt->fetchAll();
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Guard Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <!-- <link rel="stylesheet" href="../../styles/table-background.css"> -->
</head>

<body>
    <header>
        <!-- Navbar Start -->
        <?php include 'components/nav.php'; ?>
        <!-- Navbar End -->
    </header>

    <main>

        <!-- Task Lists Start -->
        <section>
            <div class="container mb-5">
                <div class="row justify-content-center">
                    <div class="col-sm-6 border border-black border-4 rounded-4">
                        <h3 class="text-center my-3">Search For Guest Invitation</h3>
                        <form method="get" action="find-guests.php">
                            <div class="mb-3 row">
                                <label for="inputPinCode" class="col-sm-2 col-form-label">Pin Code:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control border border-black border-2"
                                        id="inputPinCode" name="pinCode" value="">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-dark float-end mb-3" id="find">Find</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-sm-10">
                        <h2 class="text-center mb-4">Tasks List</h2>

                        <table class="table table-striped bg-color border border-3 border-black">
                            <thead>
                                <tr>
                                    <th class="p-3 text-center border border-2 border-black" scope="col">Flat</th>
                                    <th class="p-3 text-center border border-2 border-black" scope="col">Full Name</th>
                                    <th class="p-3 text-center border border-2 border-black" scope="col">Task</th>
                                    <th class="p-3 text-center border border-2 border-black" scope="col">Time</th>
                                    <th class="p-3 text-center border border-2 border-black" scope="col">Status</th>
                                    <th class="p-3 text-center border border-2 border-black" scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                foreach ($tasks as $task):
                                    if ($task['status'] == 0):
                                        ?>

                                <tr>
                                    <td class="p-3 border border-2 border-black">
                                        <?= $task['flat']; ?>
                                    </td>
                                    <td class="p-3 border border-2 border-black">
                                        <?= $task['fullname']; ?>
                                    </td>
                                    <td class="p-3 border border-2 border-black">
                                        <?= $task['task']; ?>
                                    </td>
                                    <td class="p-3 border border-2 border-black">
                                        <?= $task['given_at']; ?>
                                    </td>
                                    <td class="p-3 border border-2 border-black">
                                        <?= $task['status'] ? "Complete.!!" : "Pending..."; ?>
                                    </td>
                                    <td class="p-3 text-center border border-2 border-black">
                                        <a class="text-success fw-semibold"
                                            href="task-complete.php?id= <?= $task['id']; ?>">Received</a>
                                    </td>
                                </tr>

                                <?php
                                    endif;
                                endforeach;
                                ?>

                                <?php
                                foreach ($tasks as $task):
                                    if ($task['status'] == 1):
                                        ?>

                                <tr>
                                    <td class="p-3 border border-2 border-black">
                                        <?= $task['flat']; ?>
                                    </td>
                                    <td class="p-3 border border-2 border-black">
                                        <?= $task['fullname']; ?>
                                    </td>
                                    <td class="p-3 border border-2 border-black">
                                        <?= $task['task']; ?>
                                    </td>
                                    <td class="p-3 border border-2 border-black">
                                        <?= $task['given_at']; ?>
                                    </td>
                                    <td class="p-3 border border-2 border-black">
                                        <?= $task['status'] ? "Complete.!!" : "Pending..."; ?>
                                    </td>
                                    <td class="p-3 text-center border border-2 border-black">
                                        <a class="text-success fw-semibold"
                                            href="task-trash.php?id= <?= $task['id']; ?>">Delivered</a>
                                    </td>
                                </tr>

                                <?php
                                    endif;
                                endforeach;
                                ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
        <!-- Task Lists End -->

    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>