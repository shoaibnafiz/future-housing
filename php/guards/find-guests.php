<?php

$currentPage = 'find-guests';

if(isset($_GET['username'])){
    $_username = $_GET['username'];
}

include "../../database.php";

if(isset($_GET['pinCode'])){
    $pinCode = $_GET['pinCode'];
    $query = "SELECT * FROM `guests` WHERE pinCode = :pinCode";
    
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':pinCode', $pinCode);
    $result = $stmt->execute();
    $guest = $stmt->fetch();
}else{
    $query = "SELECT * FROM `guests`";

    $stmt = $conn->prepare($query);
    $result = $stmt->execute();
    $guests = $stmt->fetchAll();
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Guard Dashboard</title>
    <link rel="shortcut icon" href="../../image/background/a.jpg" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <!-- <link rel="stylesheet" href="../../styles/table-background.css"> -->
    <link rel="stylesheet" href="../../styles/bootstrap-icons.css">
</head>

<body>
    <header>
        <!-- Navbar Start -->
        <?php include 'components/nav.php'; ?>
        <!-- Navbar End -->
    </header>

    <main>

        <!-- Guest's Details Start -->
        <section>
            <div class="container my-3">
                <div class="row justify-content-center">
                    <div class="col-sm-6 border border-black border-4 rounded-4">
                        <h3 class="text-center my-3">Search For Guest Invitation</h3>
                        <form method="get" action="">
                            <div class="mb-3 row">
                                <label for="inputPinCode" class="col-sm-2 col-form-label">Pin Code:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control border border-black border-2"
                                        id="inputPinCode" name="pinCode" value="" required>
                                </div>
                            </div>
                            <div class="mb-3 row d-none">
                                <label for="inputUserName" class="col-sm-2 col-form-label">Username:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control border border-black border-2"
                                        id="inputUserName" name="username" value="<?=$_username?>">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-dark float-end mb-3" id="find">Find</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col">
                        <h2 class="text-center mb-4">Guests Invitations</h2>

                        <?php
                        if(!isset($pinCode)){
                            include "components/all-guests.php";
                        }else{
                            if(empty($guest) || $guest['status']!==0){
                                include "components/no-guests.php";
                            }else{
                                include "components/search-guest.php";
                            }
                        }
                        ?>

                    </div>
                </div>
            </div>
        </section>
        <!-- Guest's Details End -->

    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>

</body>

</html>