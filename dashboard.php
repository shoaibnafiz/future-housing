<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <!-- Bootstrap Link -->
    <link rel="stylesheet" href="styles/bootstrap.min.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> -->
    <!-- Awesome Icon -->
    <script src="https://kit.fontawesome.com/a2afe6c5bb.js" crossorigin="anonymous"></script>
    <!-- Stylesheet Link -->
    <link rel="stylesheet" href="styles/dashboard.css">
    <link rel="stylesheet" href="styles/bootstrap-icons.css">
    <link rel="stylesheet" href="styles/table-background.css">


</head>

<body>
    <header>
        <!-- Navbar Start -->
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container">
                <h2><a class="navbar-brand" href="dashboard.php">Future Housing</a></h2>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" href="dashboard.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="profile-edit.php">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="flat-rent.php">Flat Rent</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="invite-guests.php">Guests</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="tasks.php">Tasks</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="report.php">Report</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="complains.php">Complains</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="guards.php">Guards</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Navbar End -->
    </header>

    <main>

        <!-- View Start -->
        <section class="container my-5">
            <div class="view mx-auto border border-dark border-5 rounded-4 p-5">
                <h2 class="text-center">View</h2>
                <div class="row mt-5 gap-3">
                    <a class="btn btn-outline-danger col d-flex flex-column align-items-center border-3 rounded-3 py-4"
                        href="notices.php">
                        <p><i class="fa-solid fa-square-poll-horizontal fa-2xl"></i>
                        </p>
                        <h4>Notices</h4>
                    </a>
                    <a class="btn btn-outline-warning col d-flex flex-column align-items-center border-3 rounded-3 py-4"
                        href="events.php">
                        <p><i class="fa-solid fa-calendar-day fa-2xl"></i></p>
                        <h4>Events</h4>
                    </a>
                    <a class="btn btn-outline-info col d-flex flex-column align-items-center border-3 rounded-3 py-4"
                        href="history.php">
                        <p><i class="fa-solid fa-clock-rotate-left fa-2xl"></i></p>
                        <h4>History</h4>
                    </a>
                </div>
            </div>
        </section>
        <!-- View End -->

        <!-- Profile Start -->
        <section id="profile-container">
            <div class="bg-color text-light row col-lg-8 border rounded-4 mx-auto p-5 my-5 shadow-lg">
                <div class="col-md-4 text-center mb-3">
                    <img src="image/users/user.jpg" class="mt-2 1img-fluid rounded" style="width: 180px; height: 180px;"
                        alt="">
                    <div>
                        <a href="profile-edit.php"><button class="mx-auto m-1 btn btn-secondary">Edit</button></a>
                        <!-- <button class="mx-auto m-1 btn-sm btn btn-secondary">Delete</button>
                <button class="mx-auto m-1 btn-sm btn btn-secondary">Logout</button> -->
                    </div>
                </div>
                <div class="col-md-8">
                    <h2>User Profile</h2>
                    <table class="table table-striped">
                        <tr>
                            <th colspan="2">User Details:</th>
                        </tr>
                        <tr>
                            <th><i class="bi bi-person-circle"></i> Name</th>
                            <td>John Doe</td>
                        </tr>
                        <tr>
                            <th><i class="bi bi-envelope"></i> Email</th>
                            <td>email@email.com</td>
                        </tr>
                        <tr>
                            <th><i class="bi bi-phone"></i> Phone</th>
                            <td>01812345678</td>
                        </tr>
                        <tr>
                            <th><i class="bi bi-buildings-fill"></i> Flat No</th>
                            <td>201</td>
                        </tr>
                        <tr>
                            <th><i class="bi bi-person-square"></i> NID No</th>
                            <td>81812345678</td>
                        </tr>
                        <tr>
                            <th><i class="bi bi-gender-ambiguous"></i> Gender</th>
                            <td>Male</td>
                        </tr>
                        <tr>
                            <th><i class="bi bi-person-badge"></i> Acount Type</th>
                            <td>Renter</td>
                        </tr>
                    </table>
                </div>
            </div>
        </section>
        <!-- Profile End -->

    </main>

    <!-- Footer Start -->
    <footer class="text-center bg-body-tertiary pt-5 pb-3">
        <p>Copyright <i class="fa-regular fa-copyright"></i> 2023 <strong>Future Housing</strong>. All rights reserved.
        </p>
    </footer>
    <!-- Footer End -->

    <!-- Bootstrap JS Link -->
    <script src="js/bootstrap.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script> -->

</body>

</html>