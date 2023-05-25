<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invite Guests</title>

    <!-- Bootstrap Link -->
    <link rel="stylesheet" href="../../styles/bootstrap.min.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> -->

    <!-- Stylesheet Link -->
    <link rel="stylesheet" href="../../styles/bootstrap-icons.css">
    <link rel="stylesheet" href="../../styles/table-background.css">



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
                            <a class="nav-link" href="dashboard.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="profile-edit.php">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="flat-rent.php">Flat Rent</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="invite-guests.php">Guests</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="tasks.php">Tasks</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="report.php">Report</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="complains.php">Complain</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="guards.php">Guards</a>
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

        <!-- Invite Guests Start -->
        <div class="col-md-8 col-lg-5 border rounded-4 mx-auto p-5 my-5 shadow-lg bg-color text-light">
            <h2>Guests Details:</h2>
            <form action="store-guest.php" method="post">

                <table class="table table-striped">
                    <tr>
                        <th><i class="bi bi-person-circle"></i> Guest Name</th>
                        <td>
                            <input type="text" class="form-control" name="guestname" id="guest-name">
                        </td>
                    </tr>
                    <tr>
                        <th><i class="bi bi-phone"></i> Guest Cell</th>
                        <td>
                            <input type="text" class="form-control" name="guestcell" id="guest-cell">
                        </td>
                    </tr>
                    <tr>
                        <th><i class="bi bi-people-fill"></i> Total Guests</th>
                        <td>
                            <input type="text" class="form-control" name="totalguest" id="total-guest">
                        </td>
                    </tr>
                    <tr>
                        <th><i class="bi bi-patch-question-fill"></i> Visit Purpose</th>
                        <td>
                            <input type="text" class="form-control" name="visitpurpose" id="visit-purpose">
                        </td>
                    </tr>
                    <tr>
                        <th><i class="bi bi-calendar3-event-fill"></i> Date</th>
                        <td>
                            <input type="date" class="form-control" name="date" id="date">
                        </td>
                    </tr>
                    <tr>
                        <th><i class="bi bi-clock-fill"></i> Time</th>
                        <td>
                            <input type="time" class="form-control" name="time" id="time">
                        </td>
                    </tr>
                </table>

                <div class="p-2">
                    <button onclick="qrCode()" type="button" class="btn btn-dark float-end" data-bs-toggle="modal"
                        data-bs-target="#staticBackdrop">Save</button>
                    <a href="dashboard.php" class="btn btn-secondary">Back</a>
                </div>
            </form>
        </div>
        <!-- Invite Guests End -->

        <!-- QR Code Start -->

        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">QR Code</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <div id="qrImg" class="text-center">
                            <img src="" alt="" id="qrSecondImg">
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-dark">Save</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- QR Code End -->

    </main>

    <!-- Footer Start -->
    <footer class="fixed-bottom text-center bg-body-tertiary pt-5 pb-3">
        <p>Copyright <i class="fa-regular fa-copyright"></i> 2023 <strong>Future Housing</strong>. All rights reserved.
        </p>
    </footer>
    <!-- Footer End -->

    <!-- Bootstrap JS Link -->
    <script src="../../js/bootstrap.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script> -->

    <script>
        let qrImg = document.getElementById('qrImg');
        let qrSecondImg = document.getElementById('qrSecondImg');
        let guestName = document.getElementById('guest-name').value;
        let guestCell = document.getElementById('guest-cell').value;
        let totalGuest = document.getElementById('total-guest').value;
        let visitPurpose = document.getElementById('visit-purpose').value;

        function qrCode() {
            // qrSecondImg.src = "https://api.qrserver.com/v1/create-qr-code/?size=150x150$date=" + qrTxt.value;
            qrSecondImg.src =
                `https://chart.googleapis.com/chart?cht=qr&chl=
            Guest Name = ${guestName}; Guest Cell = ${guestCell}; Total Guest = ${totalGuest}; Visit Purpose = ${visitPurpose}; &chs=160x160&chld=L|0`;
        }
    </script>
</body>

</html>