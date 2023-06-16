<?php

$currentPage = "events";

include "../../database.php";

$query = "SELECT * FROM `events`";

$stmt = $conn->prepare($query);
$result = $stmt->execute();
$events = $stmt->fetchAll();

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
    <link rel="shortcut icon" href="../../image/icons/icon-48x48.png" />

    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link rel="canonical" href="https://demo-basic.adminkit.io/" />

    <title>Events | Admin Panel</title>

    <link href="../../styles/app.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
    <div class="wrapper">

        <?php include "components/sidebar.php"?>


        <div class="main">

            <?php include "components/navbar.php"?>

            <main class="content">
                <div class="container-fluid p-0">

                    <h1 class="h3 mb-3">
                        <strong>Events</strong>
                        <a type="button" class="btn btn-dark float-end">Add Event</a>
                    </h1>

                    <div class="row">

                        <div class="col-12 d-flex">
                            <div class="card flex-fill w-100">
                                <div class="card-header">
                                </div>
                                <div class="card-body py-3">
                                    <table id="datatablesSimple" class="table table-hover my-0">
                                        <thead>
                                            <tr>
                                                <th>Event Date</th>
                                                <th>Event Details</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Event Date</th>
                                                <th>Event Details</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <?php
                                                foreach($events as $event):
                                            ?>
                                            <tr>
                                                <td><?=$event['date']?></td>
                                                <td><?=$event['details']?></td>
                                                <?php
                                                endforeach;
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </main>

            <!-- Footer Start -->
            <?php include "components/footer.php"?>
            <!-- Footer End -->
        </div>

    </div>

    <script src="../../js/app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
        crossorigin="anonymous"></script>
    <script src="../../js/datatable.js"></script>

</body>

</html>