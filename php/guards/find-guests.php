<?php

$currentPage = 'find-guests';

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
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col">
                        <h2 class="text-center mb-4">Guests Details</h2>

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