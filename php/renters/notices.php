<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notices</title>

    <!-- Bootstrap Link -->
    <link rel="stylesheet" href="../../styles/bootstrap.min.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> -->
    <!-- Awesome Icon -->
    <!-- <script src="https://kit.fontawesome.com/a2afe6c5bb.js" crossorigin="anonymous"></script> -->
    <!-- Stylesheet Link -->
    <link rel="stylesheet" href="../../styles/history.css">
</head>

<body>
    <header>
        <!-- Navbar Start -->
        <nav class="navbar bg-body-tertiary">
            <div class="container">
                <h2><a class="navbar-brand" href="dashboard.php?username=<?= $renter['username']; ?>">Future Housing</a>
                </h2>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                    aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Future Housing</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page"
                                    href="dashboard.php?username=<?= $renter['username']; ?>">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="profile.php?username=<?= $renter['username']; ?>">Profile</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="flat-rent.php?username=<?= $renter['username']; ?>">Flat
                                    Rent</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="guest.php?username=<?= $renter['username']; ?>">Guest</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="tasks.php?username=<?= $renter['username']; ?>">Tasks</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="report.php">Report</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"
                                    href="complain.php?username=<?= $renter['username']; ?>">Complain</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="guard.php">Guard</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../../index.php">Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Navbar End -->
    </header>

    <main>
        <section class="container">
            <h3 class="text-center text-light bg-dark py-3 rounded-3">Notices</h3>
            <div id="notices">
            </div>
        </section>
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
    <script src="../../js/notices.js"></script>
</body>

</html>