<?php
$currentPage = "reports";
include "../../database.php";

$query = "SELECT * FROM `flat_rents`";
$stmt = $conn->prepare($query);
$result = $stmt->execute();
$flat_rents = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
    <meta name="author" content="AdminKit">
    <meta name="keywords"
        content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="../../image/background/a.jpg" />

    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link rel="canonical" href="https://demo-basic.adminkit.io/" />

    <title>Flat Rents | Admin Panel</title>

    <link href="../../styles/app.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">

    <link href="../../styles/print.css" rel="stylesheet" media="print">


</head>

<body>
    <div class="wrapper">
        <?php include "components/sidebar.php"?>

        <div class="main">
            <?php include "components/navbar.php"?>
            <main class="content">
                <div class="container-fluid p-0">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="col-md-12">
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-12 mb-2">
                                            <button class="btn btn-sm btn-block btn-success col-md-2 ml-1 float-end"
                                                type="button" onclick="window.print()" id="print"><i
                                                    class="fa fa-print"></i> Print</button>
                                        </div>
                                    </div>
                                    <div id="report">
                                        <div class="on-print">
                                            <p>
                                                <center>Rental Balances Report</center>
                                            </p>
                                            <p>
                                                <center>As of <b><?php echo date('F, Y') ?></b></center>
                                            </p>
                                        </div>
                                        <div class="row">
                                            <table id="datatablesSimple" class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Renter</th>
                                                        <th>Flat</th>
                                                        <th>Mobile No</th>
                                                        <th>Monthly Rate</th>
                                                        <th>Payable Months</th>
                                                        <th>Payable Amount</th>
                                                        <th>Paid</th>
                                                        <th>Outstanding Balance</th>
                                                        <th>Last Payment</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php 
                                                    $i = 1;
                                                    if (!empty($flat_rents)):
                                                        foreach ($flat_rents as $flat_rent):
                                                            $renter_query = "SELECT * FROM `renters` WHERE flat = :flat";
                                                            $renter_stmt = $conn->prepare($renter_query);
                                                            $renter_stmt->bindParam(':flat', $flat_rent['flat']);
                                                            $renter_stmt->execute();
                                                            $renter = $renter_stmt->fetch();

                                                            $flat_query = "SELECT * FROM `flats` WHERE flat = :flat";
                                                            $flat_stmt = $conn->prepare($flat_query);
                                                            $flat_stmt->bindParam(':flat', $flat_rent['flat']);
                                                            $flat_stmt->execute();
                                                            $flat = $flat_stmt->fetch();

                                                            $months = floor((time() - strtotime($renter['registered_at'])) / (30 * 24 * 60 * 60));
                                                            $payable = $flat['rent'] * $months;

                                                            $paid_query = "SELECT SUM(rent) AS paid FROM flat_rents WHERE flat = :flat";
                                                            $paid_stmt = $conn->prepare($paid_query);
                                                            $paid_stmt->bindParam(':flat', $renter['flat']);
                                                            $paid_stmt->execute();
                                                            $paid_result = $paid_stmt->fetch();
                                                            $paid = $paid_result['paid'] ? $paid_result['paid'] : 0;

                                                            $last_payment_query = "SELECT rented_at FROM flat_rents WHERE flat = :flat ORDER BY rented_at DESC LIMIT 1";
                                                            $last_payment_stmt = $conn->prepare($last_payment_query);
                                                            $last_payment_stmt->bindParam(':flat', $renter['flat']);
                                                            $last_payment_stmt->execute();
                                                            $last_payment_result = $last_payment_stmt->fetch();
                                                            $last_payment = $last_payment_result ? date("M d, Y", strtotime($last_payment_result['rented_at'])) : 'N/A';

                                                            $outstanding = $payable - $paid;
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $i++ ?></td>
                                                        <td><?php echo ucwords($flat_rent['fullname']) ?></td>
                                                        <td><?php echo $flat_rent['flat'] ?></td>
                                                        <td><?php echo $renter['phone'] ?></td>
                                                        <td class="text-right">
                                                            <?php echo number_format($flat['rent'], 2) ?></td>
                                                        <td class="text-right"><?php echo $months.' mo/s' ?></td>
                                                        <td class="text-right"><?php echo number_format($payable, 2) ?>
                                                        </td>
                                                        <td class="text-right"><?php echo number_format($paid, 2) ?>
                                                        </td>
                                                        <td class="text-right">
                                                            <?php echo number_format($outstanding, 2) ?></td>
                                                        <td><?php echo $last_payment ?></td>
                                                    </tr>
                                                    <?php
                                                        endforeach;
                                                    else:
                                                    ?>
                                                    <tr>
                                                        <th colspan="9">
                                                            <center>No Data.</center>
                                                        </th>
                                                    </tr>
                                                    <?php
                                                    endif;
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            <footer class="footer">
                <?php include "components/footer.php"?>
            </footer>
        </div>
    </div>

    <script src="../../js/app.js"></script>
    <script src="../../js/datatable.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
        crossorigin="anonymous"></script>


</body>

</html>