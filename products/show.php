<?php

$webroot = "http://localhost/crud-11/admin/";

// $_id = 28;
$_id = $_GET['id'];
// var_dump($_GET);


// Connection to database

$servername = "localhost";
$username = "root";
$password = "";

$conn = new PDO("mysql:host=$servername;dbname=bitm_11", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


//Export Query

$query = "SELECT * FROM `products` WHERE id = :id";

$stmt = $conn->prepare($query);
$stmt->bindParam(':id', $_id);
$result = $stmt->execute();
$product = $stmt->fetch();

// var_dump($product);

?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lists</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-6">
                    <h1 class="text-center mb-4">Product Show</h1>
                    <dl class="row">
                        <dt class="col-sm-3">ID: </dt>
                        <dd class="col-sm-9">
                            <?= $product['id']; ?>
                        </dd>
                        <dt class="col-sm-3">Title: </dt>
                        <dd class="col-sm-9">
                            <?= $product['title']; ?>
                        </dd>
                        <dt class="col-sm-3">Description: </dt>
                        <dd class="col-sm-9">
                            <?= $product['description']; ?>
                        </dd>
                        <dt class="col-sm-3">Picture: </dt>
                        <dd class="col-sm-9">
                            <!-- <?= $product['picture']; ?> -->
                            <img src="<?=$webroot;?>uploads/<?= $product['picture']; ?>" alt="Banner Image" class="img-fluid" width="50%">
                        </dd>
                    </dl>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>

</html>