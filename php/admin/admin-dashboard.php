<?php

$currentPage = "dashboard";

include "../../database.php";

$query = "SELECT * FROM `flats`";

$stmt = $conn->prepare($query);
$result = $stmt->execute();
$flats = $stmt->fetchAll();
$rented = 0;

foreach($flats as $flat){
    if($flat['status']){
        $rented++;
    }
}

$query = "SELECT * FROM `tasks`";

$stmt = $conn->prepare($query);
$result = $stmt->execute();
$tasks = $stmt->fetchAll();
$taskcount = 0;
$taskdonecount = 0;

foreach($tasks as $task){
    if($task['status'] == 1){
        $taskcount++;
    }else if($task['status'] == 2){
        $taskdonecount++;
    }
}

$query = "SELECT * FROM `complains`";

$stmt = $conn->prepare($query);
$result = $stmt->execute();
$complains = $stmt->fetchAll();
$complaincount = 0;

foreach($complains as $complain){
    if($complain['status']){
        $complaincount++;
    }
}

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

    <link rel="canonical" href="https://demo-basic.adminkit.io/" />

    <title>Dashboard | Admin Panel</title>

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

                    <h1 class="h3 mb-3"><strong>Admin</strong> Dashboard</h1>

                    <div class="row">
                        <div class="col-12 col-lg-4 col-xxl-3 d-flex">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">Flats Pie</h5>
                                    <h6 class="card-subtitle text-muted">This Pie chart is showing the
                                        relational proportions of Flats.</h6>
                                </div>
                                <div class="card-body">
                                    <div class="chart chart-sm">
                                        <canvas id="chartjs-flats-pie"></canvas>
                                    </div>
                                </div>
                                <table class="table my-0">
                                    <tbody>
                                        <tr>
                                            <td>Total Flats</td>
                                            <td class="text-end"><?=count($flats)?></td>
                                        </tr>
                                        <tr>
                                            <td>Flats Rented</td>
                                            <td class="text-end"><?=$rented?></td>
                                        </tr>
                                        <tr>
                                            <td>Flats Available</td>
                                            <td class="text-end"><?=count($flats)-$rented?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4 col-xxl-3 d-flex">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">Tasks Pie</h5>
                                    <h6 class="card-subtitle text-muted">This Pie chart is showing the
                                        relational proportions of Tasks.</h6>
                                </div>
                                <div class="card-body">
                                    <div class="chart chart-sm">
                                        <canvas id="chartjs-tasks-pie"></canvas>
                                    </div>
                                </div>
                                <table class="table mb-0">
                                    <tbody>
                                        <tr>
                                            <td>Total Tasks</td>
                                            <td class="text-end"><?=count($tasks)?></td>
                                        </tr>
                                        <tr>
                                            <td>Tasks Completed</td>
                                            <td class="text-end"><?=$taskdonecount?></td>
                                        </tr>
                                        <tr>
                                            <td>Current Tasks</td>
                                            <td class="text-end"><?=$taskcount?></td>
                                        </tr>
                                        <tr>
                                            <td>Tasks Panding</td>
                                            <td class="text-end"><?=count($tasks)-$taskcount?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4 col-xxl-3 d-flex">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">Complains Pie</h5>
                                    <h6 class="card-subtitle text-muted">This Pie chart is showing the
                                        relational proportions of Complains.</h6>
                                </div>
                                <div class="card-body">
                                    <div class="chart chart-sm">
                                        <canvas id="chartjs-complains-pie"></canvas>
                                    </div>
                                </div>
                                <table class="table mb-0">
                                    <tbody>
                                        <tr>
                                            <td>Total Complains</td>
                                            <td class="text-end"><?=count($complains)?></td>
                                        </tr>
                                        <tr>
                                            <td>Complains Solved</td>
                                            <td class="text-end"><?=$complaincount?></td>
                                        </tr>
                                        <tr>
                                            <td>Complains Panding</td>
                                            <td class="text-end"><?=count($complains)-$complaincount?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-xxl-3 d-flex order-1 order-xxl-1">
                            <div class="card flex-fill">
                                <div class="card-header">

                                    <h5 class="card-title mb-0">Calendar</h5>
                                </div>
                                <div class="card-body d-flex">
                                    <div class="align-self-center w-100">
                                        <div class="chart">
                                            <div id="datetimepicker-dashboard"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </main>

            <!-- Footer Start -->
            <?php include "components/footer.php";?>
            <!-- Footer End -->

        </div>

    </div>

    <script src="../../js/app.js"></script>
    <script>
    document.addEventListener("DOMContentLoaded", function() {
        // Pie chart
        new Chart(document.getElementById("chartjs-flats-pie"), {
            type: "pie",
            data: {
                labels: ["Rented", "Available"],
                datasets: [{
                    data: [<?=$rented?>, <?=count($flats)-$rented?>],
                    backgroundColor: [
                        window.theme.primary,
                        window.theme.danger,
                    ],
                    borderColor: "transparent"
                }]
            },
            options: {
                maintainAspectRatio: false,
                legend: {
                    display: false
                }
            }
        });
    });
    </script>
    <script>
    document.addEventListener("DOMContentLoaded", function() {
        // Pie chart
        new Chart(document.getElementById("chartjs-tasks-pie"), {
            type: "pie",
            data: {
                labels: ["Task Completed", "Current Task", "Task Panding"],
                datasets: [{
                    data: [<?=$taskdonecount?>, <?=$taskcount?>, <?=count($tasks)-$taskcount?>],
                    backgroundColor: [
                        window.theme.primary,
                        window.theme.warning,
                        window.theme.danger,
                    ],
                    borderColor: "transparent"
                }]
            },
            options: {
                maintainAspectRatio: false,
                legend: {
                    display: false
                }
            }
        });
    });
    </script>
    <script>
    document.addEventListener("DOMContentLoaded", function() {
        // Pie chart
        new Chart(document.getElementById("chartjs-complains-pie"), {
            type: "pie",
            data: {
                labels: ["Complain Completed", "Complain Panding"],
                datasets: [{
                    data: [<?=$complaincount?>, <?=count($complains)-$complaincount?>],
                    backgroundColor: [
                        window.theme.primary,
                        window.theme.danger,
                    ],
                    borderColor: "transparent"
                }]
            },
            options: {
                maintainAspectRatio: false,
                legend: {
                    display: false
                }
            }
        });
    });
    </script>

    <script>
    document.addEventListener("DOMContentLoaded", function() {
        var date = new Date(Date.now() - 5 * 24 * 60 * 60 * 1000);
        var defaultDate = date.getUTCFullYear() + "-" + (date.getUTCMonth() + 1) + "-" + (date.getUTCDate() +
            5);
        document.getElementById("datetimepicker-dashboard").flatpickr({
            inline: true,
            prevArrow: "<span title=\"Previous month\">&laquo;</span>",
            nextArrow: "<span title=\"Next month\">&raquo;</span>",
            defaultDate: defaultDate
        });
    });
    </script>

</body>

</html>