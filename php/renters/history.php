<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>History</title>

    <!-- Bootstrap Link -->
    <link rel="stylesheet" href="../../styles/bootstrap.min.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> -->
    <!-- Stylesheet Link -->
    <link rel="stylesheet" href="../../styles/history.css">
</head>

<body>
    <header>
        <!-- Navbar Start -->
        <nav class="navbar navbar-expand-md bg-body-tertiary">
            <div class="container">
                <h2><a class="navbar-brand" href="dashboard.php">Future Housing</a></h2>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul id="navbar-nav" class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Flat Rent & Utility Bills</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">All Guests</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Tasks</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Complains</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../../index.php">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Navbar End -->
    </header>

    <main>
        <!-- Flat Rent History Section Start -->
        <section id="history-flat-rent-container" class="container">
            <h3 class="text-center text-light bg-dark py-3 rounded-3">Flat Rent History</h3>
            <div id="history-flat-rent">
            </div>
        </section>
        <!-- Flat Rent History Section End -->

        <!-- Guest History Section Start -->
        <section id="history-guests-container" class="container d-none">
            <h3 class="text-center text-light bg-dark py-3 rounded-3">Guests History</h3>
            <div id="history-guests">
            </div>
        </section>
        <!-- Guest History Section End -->

        <!-- Tasks History Section Start -->
        <section id="history-tasks-container" class="container d-none">
            <h3 class="text-center text-light bg-dark py-3 rounded-3">Tasks History</h3>
            <div id="history-tasks">
            </div>
        </section>
        <!-- Tasks History Section End -->

        <!-- Complains History Section Start -->
        <section id="history-complains-container" class="container d-none">
            <h3 class="text-center text-light bg-dark py-3 rounded-3">Complains History</h3>
            <div id="history-complains">
            </div>
        </section>
        <!-- Complains History Section End -->
    </main>

    <!-- Footer Start -->
    <footer class="text-center bg-body-tertiary pt-5 pb-3">
        <p>Copyright <i class="fa-regular fa-copyright"></i> 2023 <strong>Future Housing</strong>. All rights reserved.
        </p>
    </footer>
    <!-- Footer End -->

    <!-- Bootstrap JS Link -->
    <script src="../../js/bootstrap.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script> -->
    <script src="../../js/history.js"></script>
</body>

</html>