<?php

$currentPage = 'flat-rent';

$_username = $_GET['username'];


include "../../database.php";

$query = "SELECT * FROM `renters` WHERE username = :username";

$stmt = $conn->prepare($query);
$stmt->bindParam(':username', $_username);
$result = $stmt->execute();
$renter = $stmt->fetch();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flat Rent</title>
    <link rel="shortcut icon" href="../../image/background/a.jpg" />

    <!-- Bootstrap Link -->
    <link rel="stylesheet" href="../../styles/bootstrap.min.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> -->

    <!-- Stylesheet Link -->
    <link rel="stylesheet" href="../../styles/bootstrap-icons.css">
    <link rel="stylesheet" href="../../styles/table-background.css">
    <link rel="stylesheet" href="../../styles/history.css">


</head>

<body>
    <header>
        <!-- Navbar Start -->
        <?php include 'components/nav.php'; ?>
        <!-- Navbar End -->
    </header>

    <main>

        <!-- Flat Rent Start -->
        <div class="col-md-8 col-lg-5 border rounded-4 mx-auto p-5 my-5 shadow-lg bg-danger text-light">
            <h2>Flat Rent Details</h2>
            <form action="store-flat-rent.php" method="post">

                <table class="table table-striped">
                    <tr>
                        <th><i class="bi bi-person-circle"></i> Full Name</th>
                        <td>
                            <input type="text" class="form-control" name="fullname" id="fullname"
                                value="<?= $renter['fullname']; ?>">
                        </td>
                    </tr>
                    <tr>
                        <th><i class="bi bi-phone"></i> Mobile No</th>
                        <td>
                            <input type="text" class="form-control" name="phone" id="phone"
                                value="<?= $renter['phone']; ?>">
                        </td>
                    </tr>
                    <tr>
                        <th><i class="bi bi-buildings-fill"></i> Flat No</th>
                        <td>
                            <input type="text" class="form-control" name="flat" id="flat"
                                value="<?= $renter['flat']; ?>">
                        </td>
                    </tr>
                    <tr>
                        <th><i class="bi bi-cash-coin"></i> Rent Amount</th>
                        <td>
                            <input type="text" class="form-control" name="rent" id="rent" required>
                        </td>
                    </tr>
                    <tr>
                        <th><i class="bi bi-cash-coin"></i> Gas Bill</th>
                        <td>
                            <input type="text" class="form-control" name="gas_bill" id="gas_bill" required>
                        </td>
                    </tr>
                    <tr>
                        <th><i class="bi bi-phone"></i> Send to</th>
                        <td>
                            <input type="text" class="form-control" value="01790323767" disabled>
                        </td>
                    </tr>
                    <tr>
                        <th><i class="bi bi-phone"></i> bKash Mobile No</th>
                        <td>
                            <input type="text" class="form-control" name="bKash_number" id="bKash_number" required>
                        </td>
                    </tr>
                    <tr>
                        <th><i class="bi bi-coin"></i> bKash Trx ID</th>
                        <td>
                            <input type="text" class="form-control" name="trx_id" id="trx_id" required>
                        </td>
                    </tr>
                    <tr class="d-none">
                        <th><i class="bi bi-person-circle"></i> User Name</th>
                        <td>
                            <input type="text" class="form-control" name="username" id="username"
                                value="<?= $renter['username'] ?>">
                        </td>
                    </tr>
                </table>

                <div class="p-2">
                    <!-- <button class="your-button-class" id="sslczPayBtn" token="if you have any token validation"
                        postdata="your javascript arrays or objects which requires in backend"
                        order="If you already have the transaction generated for current order"
                        endpoint="checkout_ajax.php"> Pay Now
                    </button> -->
                    <button type="submit" class="btn btn-dark float-end">Save</button>
                    <a href="dashboard.php?username=<?= $renter['username']; ?>" class="btn btn-secondary">Back</a>
                </div>
            </form>
        </div>
        <!-- Flat Rent End -->
    </main>

    <!-- Footer Start -->
    <?php include 'components/footer.php'; ?>
    <!-- Footer End -->

    <!-- Bootstrap JS Link -->
    <script src="../../js/bootstrap.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script> -->

    <!-- <script>
    (function(window, document) {
        var loader = function() {
            var script = document.createElement("script"),
                tag = document.getElementsByTagName("script")[0];
            script.src = "https://sandbox.sslcommerz.com/embed.min.js?" + Math.random().toString(36).substring(
                7);
            tag.parentNode.insertBefore(script, tag);
        };

        window.addEventListener ? window.addEventListener("load", loader, false) : window.attachEvent("onload",
            loader);
    })(window, document);
    </script> -->

</body>

</html>