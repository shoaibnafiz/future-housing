<?php

// Connection to database

$servername = "localhost";
$username = "root";
$password = "";

$conn = new PDO("mysql:host=$servername;dbname=bitm_11", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


//Export Query

$query = "SELECT * FROM `products`";

$stmt = $conn->prepare($query);
$result = $stmt->execute();
$products = $stmt->fetchAll();

// print_r($products);



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
                    <h1 class="text-center mb-4">Products List</h1>

                    <ul class="nav justify-content-center fs-4 fw-semibold mb-3">
                        <li class="nav-item">
                            <a class="nav-link text-success active" href="create.php">Add an item</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-danger" href="#">Link</a>
                        </li>
                    </ul>


                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Title</th>
                                <th scope="col">Description</th>
                                <th scope="col">Picture Link</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            if (count($products) > 0):
                                foreach ($products as $product):

                                    ?>

                                    <tr>
                                        <td>
                                            <?= $product['title']; ?>
                                        </td>
                                        <td>
                                            <?= $product['description']; ?>
                                        </td>
                                        <td>
                                            <?= $product['picture']; ?>
                                        </td>
                                        <td class="text-center">
                                            <a href="show.php?id= <?= $product['id']; ?>">Show</a> |
                                            <a href="edit.php?id= <?= $product['id']; ?>">Edit</a> |
                                            <a href="delete.php?id= <?= $product['id']; ?>"
                                                onclick="return confirm('Are you sure you want to delete it?')">Delete</a>
                                        </td>
                                    </tr>

                                    <?php
                                endforeach;
                            else:
                                ?>
                                <tr>
                                    <td colspan="2">No Products is available. Please <a href="create.php">Click here</a> to
                                        add one</td>
                                </tr>

                                <?php
                            endif;
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>

</html>