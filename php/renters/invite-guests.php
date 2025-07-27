<?php

$currentPage = 'invite-guests';

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
    <title>Invite Guests</title>
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

        <!-- Invite Guests Start -->
        <div class="col-md-8 col-lg-5 border rounded-4 mx-auto p-5 my-5 shadow-lg bg-danger text-light">
            <h2>Invite Guests:</h2>
            <form action="store-guest.php" method="post">

                <table class="table table-striped">
                    <tr>
                        <th><i class="bi bi-person-circle"></i> Guest Name</th>
                        <td>
                            <input type="text" class="form-control" name="guest_name" id="guest-name" required>
                        </td>
                    </tr>
                    <tr>
                        <th><i class="bi bi-phone"></i> Guest Cell</th>
                        <td>
                            <input type="text" class="form-control" name="guest_cell" id="guest-cell" required>
                        </td>
                    </tr>
                    <tr>
                        <th><i class="bi bi-people-fill"></i> Total Guests</th>
                        <td>
                            <input type="text" class="form-control" name="total_guest" id="total-guest" required>
                        </td>
                    </tr>
                    <tr>
                        <th><i class="bi bi-patch-question-fill"></i> Visit Purpose</th>
                        <td>
                            <input type="text" class="form-control" name="visit_purpose" id="visit-purpose" required>
                        </td>
                    </tr>
                    <tr>
                        <th><i class="bi bi-calendar3-event-fill"></i> Date</th>
                        <td>
                            <input type="date" min="<?= date("Y-m-d");?>" class="form-control" name="date" id="date"
                                required>
                        </td>
                    </tr>
                    <tr>
                        <th><i class="bi bi-clock-fill"></i> Time</th>
                        <td>
                            <input type="time" class="form-control" name="time" id="time" required>
                        </td>
                    </tr>
                    <tr class="d-none">
                        <th><i class="bi bi-person-circle"></i> User Name</th>
                        <td>
                            <input type="text" class="form-control" name="flat" id="flat"
                                value="<?= $renter['flat'] ?>">
                        </td>
                    </tr>
                    <tr class="d-none">
                        <th><i class="bi bi-person-circle"></i> User Name</th>
                        <td>
                            <input type="text" class="form-control" name="username" id="username"
                                value="<?= $renter['username'] ?>">
                        </td>
                    </tr>
                    <tr class="d-none">
                        <th><i class="bi bi-person-circle"></i> User Name</th>
                        <td>
                            <input type="text" class="form-control" name="host_name" id="host_name"
                                value="<?= $renter['fullname'] ?>">
                        </td>
                    </tr>
                    <tr class="d-none">
                        <th><i class="bi bi-upc"></i> Pin Code</th>
                        <td>
                            <input type="text" class="form-control" name="pinCode" id="pinCode" value="">
                        </td>
                    </tr>
                </table>

                <div class="p-2">
                    <!-- onclick="qrCode()" data-bs-toggle="modal" data-bs-target="#staticBackdrop" -->
                    <button type="button" onclick="qrCode()" data-bs-toggle="modal" data-bs-target="#staticBackdrop"
                        class="btn btn-dark float-end" id="generate-pin">Save</button>
                    <a href="dashboard.php?username=<?= $renter['username'] ?>" class="btn btn-secondary">Back</a>
                </div>

                <!-- QR Code Start -->

                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">QR Code</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">

                                <div id="qrImg" class="text-center">
                                    <h4 id="inputErrorText" class="text-dark d-none">Please Input Every Details</h4>
                                    <img src="" alt="" id="qrSecondImg">
                                </div>

                            </div>
                            <div id="share" class="text-center">
                                <a href="" target="_blank" type="button" class="float btn btn-primary">Share on
                                    Facebook</a>
                                <a href="" target="_blank" type="button" class="float btn btn-success">Share on
                                    WhatsApp</a>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-dark">Save</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- QR Code End -->

            </form>
        </div>
        <!-- Invite Guests End -->

    </main>

    <!-- Footer Start -->
    <?php include 'components/footer.php'; ?>
    <!-- Footer End -->

    <!-- Bootstrap JS Link -->
    <script src="../../js/bootstrap.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script> -->


    <!-- qrCode Generator Start-->

    <script>
    /* <!-- Pin Code Generator Start--> */
    function getPin() {
        const pin = generatePin();
        const pinString = pin + '';

        if (pinString.length === 4) {
            return pin;
        } else {
            return getPin();
        }
    }

    function generatePin() {
        const random = Math.round(Math.random() * 10000);
        return random;
    }
    /* <!-- Pin Code Generator End--> */

    function qrCode() {
        const qrImg = document.getElementById('qrImg');
        const qrSecondImg = document.getElementById('qrSecondImg');
        const inputErrorText = document.getElementById('inputErrorText');
        const guestName = document.getElementById('guest-name').value;
        const guestCell = document.getElementById('guest-cell').value;
        const totalGuest = document.getElementById('total-guest').value;
        const visitPurpose = document.getElementById('visit-purpose').value;
        const date = document.getElementById('date').value;
        const time = document.getElementById('time').value;
        const share = document.getElementById('share');



        if (guestName.trim() === '' || guestCell.trim() === '' || totalGuest.trim() === '' || visitPurpose.trim() ===
            '' || date.trim() === '' || time.trim() === '') {
            qrSecondImg.src =
                `https://chart.googleapis.com/chart?cht=qr&chl=Please Input Every Details; &chs=160x160&chld=L|0`;
            inputErrorText.classList.remove('d-none');
        } else {
            const pin = getPin();
            document.getElementById('pinCode').value = pin;
            inputErrorText.classList.add('d-none');
            qrSecondImg.src =
                `https://chart.googleapis.com/chart?cht=qr&chl=Guest Name = ${guestName}; </br>; Guest Cell = ${guestCell}; Total Guest = ${totalGuest}; Visit Purpose = ${visitPurpose}; date = ${date}; time = ${time}; Pin Code = ${pin}; &chs=160x160&chld=L|0`;

            const qrCodeURL = qrSecondImg.src;
            const shareWhatsAppButton = document.querySelector('#share a.btn-success');
            const shareFacebookButton = document.querySelector('#share a.btn-primary');
            const encodedQRCodeURL = encodeURIComponent(qrCodeURL);

            shareWhatsAppButton.href =
                `https://wa.me/?text=${encodeURIComponent(`Hi There! Please find the QR code for your visit: ${qrCodeURL}`)}`;
            shareFacebookButton.href = `https://www.facebook.com/sharer/sharer.php?u=${encodedQRCodeURL}`;
        }

    }
    </script>
    <!-- qrCode Generator End-->
</body>

</html>