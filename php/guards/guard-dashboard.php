<?php

$currentPage = 'home';

if(isset($_GET['username'])){
    $_username = $_GET['username'];
}


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
    <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
    <meta name="author" content="AdminKit">
    <meta name="keywords"
        content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">
    <title>Guard Dashboard</title>
    <link rel="shortcut icon" href="../../image/background/a.jpg" />
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="canonical" href="https://demo-basic.adminkit.io/" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
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
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-sm-10">
                        <h2 class="text-center my-4">Tasks List</h2>

                        <div class="col-12 d-flex">
                            <div class="card flex-fill w-100">
                                <div class="card">
                                    <div class="card-body">
                                        <table id="datatablesSimple" class="table table-hover my-0">
                                            <thead>
                                                <tr>
                                                    <th class="">Flat</th>
                                                    <th class="d-none d-xl-table-cell">FullName</th>
                                                    <th class="">Task</th>
                                                    <th class="d-none d-xl-table-cell">Time</th>
                                                    <th class="d-none d-xl-table-cell">Status</th>
                                                    <th class="">Action</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th class="">Flat</th>
                                                    <th class="d-none d-xl-table-cell">FullName</th>
                                                    <th class="">Task</th>
                                                    <th class="d-none d-xl-table-cell">Time</th>
                                                    <th class="d-none d-xl-table-cell">Status</th>
                                                    <th class="">Action</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>

                                                <?php
                                foreach ($tasks as $task):
                                    if ($task['status'] == 0):
                                        ?>

                                                <tr>
                                                    <td class=""><?= $task['flat']; ?></td>
                                                    <td class="d-none d-xl-table-cell"><?= $task['fullname']; ?></td>
                                                    <td class=""><?= $task['task']; ?></td>
                                                    <td class="d-none d-xl-table-cell"><?= $task['given_at']; ?></td>
                                                    <td class="d-none d-xl-table-cell">
                                                        <?= $task['status'] ? "Complete.!!" : "Pending..."; ?></td>
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
                                                    <td class=""><?= $task['flat']; ?></td>
                                                    <td class="d-none d-xl-table-cell"><?= $task['fullname']; ?></td>
                                                    <td class=""><?= $task['task']; ?></td>
                                                    <td class="d-none d-xl-table-cell"><?= $task['given_at']; ?></td>
                                                    <td class="d-none d-xl-table-cell">
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
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Task Lists End -->

    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
        crossorigin="anonymous"></script>
    <script src="../../js/datatable.js"></script>
</body>

</html>