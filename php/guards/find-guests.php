<?php

$currentPage = 'find-guests';

// $pinCode = $_COOKIE['pinCode'];

$servername = "localhost";
$username = "root";
$password = "";

$conn = new PDO("mysql:host=$servername;dbname=future_housing_db", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$query = "SELECT * FROM `guests`";

$stmt = $conn->prepare($query);
$result = $stmt->execute();
$guests = $stmt->fetchAll();
/* echo "<pre>";
print_r($guests);
echo "</pre>";
die(); */
// $task = "chumma";

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

                        <div class="col-sm-6 offset-3">
                            <div class="mb-3 row">
                                <label for="inputPinCode" class="col-sm-2 col-form-label">Pin Code:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputPinCode" name="pinCode" value="">
                                </div>
                            </div>
                            <button class="btn btn-dark float-end mb-3" id="find">Find</button>
                        </div>

                        <table class="d-none table table-striped bg-color border border-3 border-black" id="table">
                            <thead>
                                <tr>
                                    <th class="p-3 text-center border border-2 border-black" scope="col">Flat</th>
                                    <th class="p-3 text-center border border-2 border-black" scope="col">Host Name</th>
                                    <th class="p-3 text-center border border-2 border-black" scope="col">Guest Name</th>
                                    <th class="p-3 text-center border border-2 border-black" scope="col">Guest Cell</th>
                                    <th class="p-3 text-center border border-2 border-black" scope="col">Total Guest
                                    </th>
                                    <th class="p-3 text-center border border-2 border-black" scope="col">Visit Purpose
                                    </th>
                                    <th class="p-3 text-center border border-2 border-black" scope="col">Date</th>
                                    <th class="p-3 text-center border border-2 border-black" scope="col">Time</th>
                                    <th class="p-3 text-center border border-2 border-black" scope="col">Pin Code</th>
                                    <th class="p-3 text-center border border-2 border-black" scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                foreach ($guests as $guest):
                                    ?>

                                <tr>
                                    <td class="p-3 border border-2 border-black">
                                        <?= $guest['flat']; ?>
                                    </td>
                                    <td class="p-3 border border-2 border-black">
                                        <?= $guest['host_name']; ?>
                                    </td>
                                    <td class="p-3 border border-2 border-black">
                                        <?= $guest['guest_name']; ?>
                                    </td>
                                    <td class="p-3 border border-2 border-black">
                                        <?= $guest['guest_cell']; ?>
                                    </td>
                                    <td class="p-3 border border-2 border-black">
                                        <?= $guest['total_guest']; ?>
                                    </td>
                                    <td class="p-3 border border-2 border-black">
                                        <?= $guest['visit_purpose']; ?>
                                    </td>
                                    <td class="p-3 border border-2 border-black">
                                        <?= $guest['date']; ?>
                                    </td>
                                    <td class="p-3 border border-2 border-black">
                                        <?= $guest['time']; ?>
                                    </td>
                                    <td class="p-3 border border-2 border-black">
                                        <?= $guest['pinCode']; ?>
                                    </td>
                                    <td class="p-3 text-center border border-2 border-black">
                                        <a class="text-success fw-semibold"
                                            href="guest-complete.php?id= <?= $guest['id']; ?>">Done</a>
                                    </td>
                                </tr>

                                <?php
                                endforeach;
                                ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
        <!-- Guest's Details End -->

    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>

    <script>
    /* function name(task) {
                            }
                            name(); */
    document.getElementById('find').addEventListener('click', function() {
        const searchPinCode = document.getElementById('inputPinCode').value;
        <?php
            foreach ($guests as $guest) {
                if ($guest['status'] == 0) {
                    ?>
        let pinCode = '<?php echo $guest['pinCode'] ?>';
        checkPin(searchPinCode, pinCode);
        <?php
                }
            }
            ?>

        function checkPin(searchPinCode, pinCode) {
            if (searchPinCode == pinCode) {
                document.getElementById('table').classList.remove('d-none');
            } else {
                document.getElementById('table').classList.add('d-none');
            }
        }

    })


    /* document.cookie = "pinCode=" + pinCode;
    document.getElementById('table').classList.remove('d-none'); */
    </script>
</body>

</html>