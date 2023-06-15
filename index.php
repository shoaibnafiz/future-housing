<?php

$webroot = "http://localhost/future-housing/image/";

if(isset($_GET['request'])){
    echo '<script type="text/javascript">';
    echo " alert('Request Sent')";
    echo '</script>';
}

include "database.php";

//Export Query
$query = "SELECT * FROM `flats`";

$stmt = $conn->prepare($query);
$result = $stmt->execute();
$flats = $stmt->fetchAll();

$flatsCount = count($flats);

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Welcome</title>

    <link rel="stylesheet" href="styles/login.css">
    <link rel="stylesheet" href="styles/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/bootstrap.min.css">

</head>

<body>

    <!-- welcome -->

    <section class="welcome">

        <header class="header">

            <nav class="navbar">
                <a href="index.php">Home</a>
                <a href="#service">Services</a>
                <a href="#flats">Flats</a>
                <a href="#facilities">Facilities</a>
                <a href="#about">About</a>
            </nav>

        </header>

        <div class="background"> </div>

        <div class="container">

            <div class="content">

                <div class="name">
                    <i class="fa fa-home" aria-hidden="true"></i>
                    <h1>&nbsp Future Housing Development</h1>
                </div>

                <div class="text-sci">

                    <p> Are you looking for easy-to-use and reliable software to manage apartment rents? Future Housing
                        Limited offers all-in-one Apartment Management Software in Bangladesh specially designed for
                        residential and commercial property managers to make. <br><br> In order to facilitate the
                        professional lives of property managers, the apartment management system aims at offering the
                        entire process in a digital format. This software also provides a communication medium that
                        simplifies the communication between a property manager and a tenant. <br> </p>

                    <div class="social-icons d-none d-lg-block">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>

                </div>
            </div>

            <div class="logreg-box">

                <div class="form-box login">

                    <form action="login-user-profile.php" method="get">

                        <h1>Sign In</h1>

                        <div class="input-box">
                            <span class="icon"><i class='bx bxs-user'></i></span>
                            <input id="username" type="text" name="username" required>
                            <Label>Username</Label>
                        </div>

                        <div class="input-box">
                            <span class="icon"><i class='bx bxs-lock-alt'></i></span>
                            <input id="user-password" type="password" name="password" required>
                            <Label>Password</Label>
                        </div>

                        <div class="input-box">

                            <select name="account_type" id="acount-type" class="icon type">
                                <option value="renter">Renter</option>
                                <option value="guard">Guard</option>
                            </select>

                            <Label>Account Type</Label>

                        </div>

                        <div class="remember-forgot">
                            <label><input type="checkbox">&nbsp Remember me</label>
                            <a href="#">Forgot password?</a>
                        </div>

                        <button id="btn-login" type="submit" class="btn-login">Login</button>

                        <div class="login-register">
                            <p>Don't have an account? &nbsp<a href="register.php" class="register-link">Sign up</a></p>
                        </div>
                    </form>

                </div>

            </div>

        </div>

    </section>


    <!-- service -->

    <section id="service" class="service">

        <h1> Services We Offer </h1>

        <p> Buying, Renting, Selling, Inventory Management, Reservations, Bookings, Billing, Invoicing, Customer
            Management, Reporting, Analytics etc. </p>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">

            <div class="col my-3">
                <div class="service-col h-100">
                    <h2> Buying </h2>

                    <p> Buying a rental property is a big decision with big financial implications. You’ll want to find
                        a
                        location that
                        is easy to rent and a property that fits your budget, and then figure out how you will pay for
                        your
                        new
                        investment property before you can make an offer. <br><br> Buying rental property differs from
                        buying a house
                        as a primary residence in that the end goal is to turn a profit. This means you will need to
                        treat
                        your investment
                        as a business by choosing affordable properties and finding the right way to finance the
                        purchase
                        the land
                        successfully. </p>

                </div>
            </div>

            <div class="col my-3">
                <div class="service-col h-100">

                    <h2> Renting </h2>

                    <p> If you’re wondering how to rent a house that turns a profit, the answer is with good planning
                        and
                        long-term
                        thinking. Many landlords only expect a few hundred dollars in profit per month, so it’s
                        important to
                        determine
                        if the time of learning how to become a landlord will be worth in your local housing market.
                        <br><br>
                        These often protect renters while they’re apartment hunting, so be sure to be clear on these
                        early
                        on. Investing in rental property requires knowledge about tenant, leasing and property
                        management
                        business.
                    </p>

                </div>
            </div>

            <div class="col my-3">
                <div class="service-col h-100">

                    <h2> Selling </h2>

                    <p> Selling your home can be daunting – all the more so if you are looking for another property to
                        buy
                        at the same time. The decisions you make when selling a property could save you many. Before you
                        sell
                        your house, you’ll want to get a rough idea of how much it is worth. <br><br> This will also
                        help
                        you calculate
                        how much money will be left if you have a mortgage to pay off. Selling your home for a while can
                        add
                        to the
                        overall expense, but it will reduce the critical time pressures in buying a new home. Investing
                        in a
                        rental
                        property can be profitable. </p>

                </div>
            </div>

        </div>

    </section>


    <!-- Flats Start -->

    <section id="flats" class="facilities">

        <h1> Flats We Have </h1>

        <p> 3 rooms, 2 bathrooms, 1 kitchen, back porch in one Flat, with 15,000 rent. 3 rooms, 2 bathrooms, 1 kitchen,
            back porch, front porch in another Flat with 20,000 rent. Gas double-burner, 1080/- bill. Electricity Self,
            Wasa from Landlord Party. Rent in advance, from 1 to 10 days, 2 months notice before vacating houses.
            Renters have to give 30,000 in advance.. </p>

        <div id="flat-limit" class="row row-cols-1 row-cols-md-2">

            <?php
            foreach ($flats as $index => $flat):
                if ($flatsCount > 2 && $index >= 4) {
                    break;
                }
                ?>

            <div class="col facilities-col">

                <div id="carouselAutoplaying" class="carousel slide carousel-fade" data-bs-ride="carousel">
                    <div class="carousel-inner h-100">
                        <div class="carousel-item active">
                            <img src="<?= $webroot; ?>flats/<?= $flat['picture1']; ?>" style="height: 280px;">
                        </div>
                        <div class="carousel-item">
                            <img src="<?= $webroot; ?>flats/<?= $flat['picture2']; ?>" style="height: 280px;">
                        </div>
                        <div class="carousel-item">
                            <img src="<?= $webroot; ?>flats/<?= $flat['picture3']; ?>" style="height: 280px;">
                        </div>
                    </div>
                </div>

                <h3> Flat
                    <?= $flat['flat']; ?>
                </h3>

                <p>
                    <?= $flat['description']; ?>
                </p>
                <div class="d-flex justify-content-between">
                    <p>
                        Rent:
                        <strong>
                            <?= $flat['rent'] ?>
                        </strong>
                    </p>
                    <p>
                        Status: <strong><?= $flat['status'] == 1 ? "Rented" : "Available" ?></strong>
                    </p>
                </div>


            </div>

            <?php
            endforeach;
            ?>

        </div>

        <div id="flat-all" class="d-none row row-cols-1 row-cols-md-2">

            <?php
            foreach ($flats as $index => $flat):
                ?>

            <div class="col facilities-col">

                <div id="carouselAutoplaying" class="carousel slide carousel-fade" data-bs-ride="carousel">
                    <div class="carousel-inner h-100">
                        <div class="carousel-item active">
                            <img src="<?= $webroot; ?>flats/<?= $flat['picture1']; ?>" style="height: 280px;">
                        </div>
                        <div class="carousel-item">
                            <img src="<?= $webroot; ?>flats/<?= $flat['picture2']; ?>" style="height: 280px;">
                        </div>
                        <div class="carousel-item">
                            <img src="<?= $webroot; ?>flats/<?= $flat['picture3']; ?>" style="height: 280px;">
                        </div>
                    </div>
                </div>

                <h3> Flat
                    <?= $flat['flat']; ?>
                </h3>

                <p>
                    <?= $flat['description']; ?>
                </p>
                <div class="d-flex justify-content-between">
                    <p>
                        Rent:
                        <strong>
                            <?= $flat['rent'] ?>
                        </strong>
                    </p>
                    <p>
                        Status: <strong><?= $flat['status'] == 1 ? "Rented" : "Available" ?></strong>
                    </p>
                </div>


            </div>

            <?php
            endforeach;
            ?>

        </div>

        <button id="show-all" class="btn btn-danger" style="width: 100px;">Show All</button>

    </section>

    <!-- Flats End -->



    <!-- facilities -->

    <section id="facilities" class="facilities">

        <h1> Facilities We Provide </h1>

        <p> Future Housing Development provides a platform for property managers and landlords to list their properties
            for rent. The platform includes property details such as location, availability. It provides a platform for
            property
            managers to track maintenance requests and schedule repairs. </p>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">

            <div class="col my-3">

                <div class="facilities-col">

                    <img
                        src="https://www.smartpropertyinvestment.com.au/images/intro-images/839x487/apartment-modern-spi.jpg">

                    <h3> Rent Collection </h3>

                    <p> Rental management systems allow landlords to collect rent from tenants online. This eliminates
                        the
                        need for paper
                        checks and makes the process more convenient for both parties. It property managers to screen
                        potential tenants by
                        conducting background checks and verifying their income. </p>

                </div>

            </div>

            <div class="col my-3">

                <div class="facilities-col">

                    <img
                        src="https://www.mastermind-ca.com/wp-content/uploads/2021/07/1Accounting-And-Financial-Reporting-min.jpg">

                    <h3> Financial Reporting </h3>

                    <p> We offer financial reporting tools that help property managers and landlords keep track of rent
                        payments, expenses,
                        and other financial data related to properties. The platform includes property details such as
                        location, size, price,
                        and availability. It screen potential tenants by background checks. </p>

                </div>

            </div>

            <div class="col my-3">

                <div class="facilities-col">

                    <img src="https://www.bankrate.com/2019/08/13233037/Condo-vs-apartment.jpeg">

                    <h3> Lease Management </h3>

                    <p> Rental management systems provide tools for managing leases, including the creation of lease
                        agreements, tracking
                        lease terms, and handling lease renewals and terminations. It enable property managers and
                        landlords
                        to communicate with tenants through the platform. </p>

                </div>

            </div>

        </div>

    </section>





    <!-- testimonials -->

    <section class="testimonials">

        <h1> What Customer Says </h1>

        <p> Customer reviews are pieces of feedback given to a business based on a customer's experience with the
            organization.
            These reviews can be public or private and are collected third-party review sites. By obtaining
            and analyzing customer reviews, businesses can measure customer satisfaction and improve their customer
            relations. </p>

        <div class="row row-cols-1 row-cols-md-2">

            <div class="col my-3">

                <div class="testimonials-col h-100">

                    <img src="https://blissful-kalam-df38fc.netlify.app/images/i.jpg">

                    <div>

                        <p> It feels amazing to know that there is an increased demand for your product, but customer
                            experience and
                            satisfaction are consequential. </p>

                        <h3> Quazi Hasnat Irfan </h3>

                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>

                    </div>

                </div>

            </div>

            <div class="col my-3">

                <div class="testimonials-col h-100">

                    <img src="https://blissful-kalam-df38fc.netlify.app/images/m.jpg">

                    <div>

                        <p> It’s okay to be wrong but it’s not okay to not accept it. When we fail to acknowledge and
                            admit
                            that we were
                            wrong, we hinder our mind. </p>

                        <h3> Ridoyan Murad </h3>

                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>

                    </div>

                </div>

            </div>

        </div>

    </section>





    <!-- footer -->

    <section id="about" class="footer">

        <div class="wide">

            <h1> About Us</h1>

            <p> Housing management serves as a way for potential clients or tenants to learn more about the company they
                may be working
                with, and to assess whether the company's values and services align with their needs and priorities. It
                may highlight any
                unique features or benefits that set the company apart from its competitors, such as specialized
                expertise in certain
                types of properties or a commitment to responsive customer service. </p>

            <div class="icons">

                <i class="fa fa-facebook"></i>
                <i class="fa fa-twitter"></i>
                <i class="fa fa-instagram"></i>
                <i class="fa fa-linkedin"></i>

                <p>Copyright <i class='bx bx-copyright'></i> 2023 |<span>&nbspFuture Housing Development</span>&nbsp|
                    All rights reserved.</p>

            </div>

        </div>

    </section>

    <script src="js/bootstrap.min.js"></script>

    <script>
    document.getElementById('show-all').addEventListener('click', function() {
        document.getElementById('flat-limit').classList.add('d-none');
        document.getElementById('show-all').classList.add('d-none');
        document.getElementById('flat-all').classList.remove('d-none');
    })
    </script>

</body>

</html>