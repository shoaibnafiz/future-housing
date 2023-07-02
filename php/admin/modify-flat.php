<?php

$webroot = "../../image/";

$_id = $_GET['id'];
$currentPage = "flats";

include "../../database.php";

$query = "SELECT * FROM `flats` WHERE id = :id";

$stmt = $conn->prepare($query);
$stmt->bindParam(':id', $_id);
$result = $stmt->execute();
$flat = $stmt->fetch();

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

                    <div class="border border-3 border-dark rounded-4 p-3">
                        <h1 class="text-center mb-4">Add New Flat</h1>
                        <form action="update-flat.php" method="post" enctype="multipart/form-data">
                            <div class="mb-3 row d-none">
                                <label for="inputId" class="col-sm-3 col-form-label">Id: </label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="inputId" name="id"
                                        value="<?= $flat['id'] ?>">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputFlat" class="col-sm-3 col-form-label">Flat: </label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="inputFlat" name="flat"
                                        value="<?= $flat['flat'] ?>">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputDescription" class="col-sm-3 col-form-label">Description: </label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="inputDescription" name="description"
                                        value="<?= $flat['description'] ?>">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputRent" class="col-sm-3 col-form-label">Rent: </label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="inputRent" name="rent"
                                        value="<?= $flat['rent'] ?>">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputGasBill" class="col-sm-3 col-form-label">Gas Bill: </label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="inputGasBill" name="gas_bill"
                                        value="<?= $flat['gas_bill'] ?>">
                                </div>
                            </div>
                            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
                                <div class="col my-3">
                                    <div class="mb-3 row">
                                        <label for="inputPicture1" class="col-sm-3 col-form-label">Picture 1: </label>
                                        <img src="<?= $webroot; ?>flats/<?= $flat['picture1']; ?>"
                                            class="js-image m-2 1img-fluid rounded" style="width: 200px; height: 100px;"
                                            alt="">
                                        <div class="col-sm-9">
                                            <input type="file" class="form-control" id="inputPicture1" name="picture1"
                                                value="">
                                            <input type="hidden" name="old_picture1" value="<?= $flat['picture1']; ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col my-3">
                                    <div class="mb-3 row">
                                        <label for="inputPicture2" class="col-sm-3 col-form-label">Picture 2: </label>
                                        <img src="<?= $webroot; ?>flats/<?= $flat['picture2']; ?>"
                                            class="js-image m-2 1img-fluid rounded" style="width: 200px; height: 100px;"
                                            alt="">
                                        <div class="col-sm-9">
                                            <input type="file" class="form-control" id="inputPicture2" name="picture2"
                                                value="">
                                            <input type="hidden" name="old_picture2" value="<?= $flat['picture2']; ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col my-3">
                                    <div class="mb-3 row">
                                        <label for="inputPicture3" class="col-sm-3 col-form-label">Picture 3: </label>
                                        <img src="<?= $webroot; ?>flats/<?= $flat['picture3']; ?>"
                                            class="js-image m-2 1img-fluid rounded" style="width: 200px; height: 100px;"
                                            alt="">
                                        <div class="col-sm-9">
                                            <input type="file" class="form-control" id="inputPicture3" name="picture3"
                                                value="">
                                            <input type="hidden" name="old_picture3" value="<?= $flat['picture3']; ?>">
                                        </div>
                                    </div>
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