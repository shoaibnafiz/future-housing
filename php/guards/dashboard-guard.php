<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = new PDO("mysql:host=$servername;dbname=future_housing_db", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

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

    <link rel="stylesheet" href="../../styles/table-background.css">
</head>

<body>
    <header>
        <!-- Navbar Start -->
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container">
                <h2><a class="navbar-brand" href="dashboard-guard.php">Future
                        Housing</a></h2>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" href="dashboard-guard.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="find-guests.php">Guests</a>
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

        <!-- Task Lists Start -->
        <section>
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
                                            <a class="text-light fw-semibold"
                                                href="task-complete.php?id= <?= $task['id']; ?>">Done</a>
                                        </td>
                                    </tr>

                                    <?php
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