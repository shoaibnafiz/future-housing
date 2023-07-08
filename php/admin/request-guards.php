<?php

$currentPage = "guard requests";

$webroot = "../../image/";

include "../../database.php";

$query = "SELECT * FROM `request_guards`";

$stmt = $conn->prepare($query);
$result = $stmt->execute();
$request_guards = array_reverse($stmt->fetchAll());

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

    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link rel="canonical" href="https://demo-basic.adminkit.io/" />

    <title>Requests for Rent | Admin Panel</title>

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

                    <h1 class="h3 mb-3"><strong>Requests for Rent</strong></h1>

                    <div class="row">

                        <div class="col-12 d-flex">
                            <div class="card flex-fill w-100">
                                <div class="card-header">
                                </div>
                                <div class="card-body py-3">
                                    <table id="datatablesSimple" class="table table-hover my-0">
                                        <thead>
                                            <tr>
                                                <th>Full Name</th>
                                                <th class="d-none d-xl-table-cell">User Name</th>
                                                <th class="d-none d-xl-table-cell">Email</th>
                                                <th class="d-none d-md-table-cell">Phone</th>
                                                <th>NID</th>
                                                <!-- <th class="d-none d-xxl-table-cell">Picture</th> -->
                                                <th class="d-none d-md-table-cell">Requested at</th>
                                                <th>Verified</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                foreach($request_guards as $request_guard):
                                            ?>
                                            <tr>
                                                <td><?=$request_guard['fullname']?></td>
                                                <td class="d-none d-xl-table-cell"><?=$request_guard['username']?></td>
                                                <td class="d-none d-xl-table-cell"><?=$request_guard['email']?></td>
                                                <td class="d-none d-md-table-cell"><?=$request_guard['phone']?></td>
                                                <td><?=$request_guard['nid']?></td>
                                                <!-- <td class="d-none d-xxl-table-cell"><img
                                                        src="<?= $webroot; ?>users/<?= $request_guard['picture']; ?>"
                                                        class="mt-2 1img-fluid rounded"
                                                        style="width: 50px; height: 50px;" alt=""></td> -->
                                                <td class="d-none d-md-table-cell">
                                                    <?=date('j F, Y; g:i A', strtotime($request_guard['requested_at']))?>
                                                </td>
                                                <td><?php
                                                if(empty($request_renter['code'])):
                                                    echo "Done";
                                                else:
                                                    echo "Not Verified";
                                                endif;
                                                ?></td>
                                                <td>
                                                    <a class="badge bg-success"
                                                        href="request-guard-accepted.php?id=<?= $request_guard['id']; ?>">Accept</a>
                                                    |
                                                    <a class="badge bg-danger"
                                                        href="request-guard-denied.php?id=<?= $request_guard['id']; ?>">Reject</a>
                                                </td>
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
    <script src="../../js/datatable.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
        crossorigin="anonymous"></script>

</body>

</html>