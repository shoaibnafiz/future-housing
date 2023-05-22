<pre>

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

</pre>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-6">
                    <h1 class="text-center mb-4">Edit</h1>
                    <form action="update.php" method="post" enctype="multipart/form-data">
                        <div class="mb-3 row d-none">
                            <label for="inputId" class="col-sm-2 col-form-label">ID: </label>
                            <div class="col-sm-10">
                                <input type="hidden" class="form-control" id="inputId" name="id"
                                    value="<?= $product['id']; ?>">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputTitle" class="col-sm-2 col-form-label">Title: </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputTitle" name="title"
                                    value="<?= $product['title']; ?>">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputDescription" class="col-sm-2 col-form-label">Description: </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputDescription" name="description"
                                    value="<?= $product['description']; ?>">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <div>
                                <label for="inputPicture" class="col-sm-2 col-form-label">Picture: </label>
                                <span>
                                    <?= $product['picture']; ?>
                                </span>
                            </div>
                            <div>
                                <img src="<?= $webroot; ?>uploads/<?= $product['picture']; ?>" alt="Banner Image"
                                    class="form-control img-fluid">
                                <input type="hidden" name="old_picture" value="<?= $product['picture'] ?>">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputPicture" class="col-sm-2 col-form-label">Picture: </label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control" id="inputPicture" name="picture" value="">
                            </div>
                        </div>

                        <button type="submit" class="btn btn-secondary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>

</html>