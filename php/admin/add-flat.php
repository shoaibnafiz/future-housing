<?php

$currentPage = "flats";

include "../../database.php";

$query = "SELECT * FROM `flats`";

$stmt = $conn->prepare($query);
$result = $stmt->execute();
$flats = $stmt->fetchAll();

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

    <title>Flats | Admin Panel</title>

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
                        <h1 class="text-center mb-4">Add New Flat</h1>
                        <form action="store-flat.php" method="post" enctype="multipart/form-data">
                            <div class="mb-3 row">
                                <label for="inputFlat" class="col-sm-3 col-form-label">Flat: </label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="inputFlat" name="flat" value="">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputDescription" class="col-sm-3 col-form-label">Description: </label>
                                <div class="col-sm-9">
                                    <textarea type="text" class="form-control" id="inputDescription" name="description"
                                        value=""></textarea>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputRent" class="col-sm-3 col-form-label">Rent: </label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="inputRent" name="rent" value="">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputPicture1" class="col-sm-3 col-form-label">Picture 1: </label>
                                <div class="col-sm-9">
                                    <input type="file" class="form-control" id="inputPicture1" name="picture1" value="">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputPicture2" class="col-sm-3 col-form-label">Picture 2: </label>
                                <div class="col-sm-9">
                                    <input type="file" class="form-control" id="inputPicture2" name="picture2" value="">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputPicture3" class="col-sm-3 col-form-label">Picture 3: </label>
                                <div class="col-sm-9">
                                    <input type="file" class="form-control" id="inputPicture3" name="picture3" value="">
                                </div>
                            </div>

                            <div>
                                <a type="btn" href="flats.php" class="btn btn-secondary">Back</a>
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