<?php

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

                    <div class="offset-md-2 offset-lg-3 col-md-8 col-lg-6 border border-3 border-dark rounded-4 p-3">
                        <h1 class="text-center mb-4">Add Event Details</h1>
                        <form action="store-event.php" method="post" enctype="multipart/form-data">
                            <div class="mb-3 row">
                                <label for="inputDate" class="col-sm-3 col-form-label">Date: </label>
                                <div class="col-sm-9">
                                    <input type="date" min="<?= date("Y-m-d");?>" class="form-control" id="inputDate"
                                        name="date" value="">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputDetails" class="col-sm-3 col-form-label">Details: </label>
                                <div class="col-sm-9">
                                    <textarea type="text" class="form-control" id="inputDetails" name="details" value=""
                                        style="height: 150px"></textarea>
                                </div>
                            </div>

                            <div>
                                <a type="btn" href="events.php" class="btn btn-secondary">Back</a>
                                <button type="submit" class="btn btn-dark float-end">Submit</button>
                            </div>
                        </form>
                    </div>

                </div>
            </main>

            <footer class="footer">
                <?php include "components/footer.php"?>
            </footer>
        </div>

    </div>

    <script src="../../js/app.js"></script>
    <script src="../../js/datatable.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
        crossorigin="anonymous"></script>

</body>

</html>