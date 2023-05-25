<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>

    <!-- Bootstrap Link -->
    <link rel="stylesheet" href="../../styles/bootstrap.min.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> -->
    <!-- Awesome Icon -->
    <script src="https://kit.fontawesome.com/a2afe6c5bb.js" crossorigin="anonymous"></script>
    <!-- Stylesheet Link -->
    <link rel="stylesheet" href="../../styles/table-background.css">
</head>

<body>
    <header>
        <!-- Navbar Start -->
        <nav class="navbar bg-body-tertiary">
            <div class="container">
                <h2><a class="navbar-brand" href="index.html">Future Housing</a></h2>
            </div>
        </nav>
        <!-- Navbar End -->
    </header>

    <main>
        <!-- Form Start -->
        <section class="container col-sm-4 my-5">
            <form action="create-flat.php" method="get" class="background border border-3 rounded-4 border-dark">
                <h2 class="text-center bg-dark text-light py-3 mb-4 rounded-3">Admin Login</h2>
                <div class="m-3">
                    <h4 for="exampleInputEmail1" class="form-label ms-5">Email address</h4>
                    <div class="d-flex align-items-center">
                        <i class="fa-solid fa-envelope fa-2xl mx-2"></i><input type="email" class="form-control"
                            id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your Email">
                    </div>
                    <div id="emailHelp" class="form-text ms-5">We'll never share your email with anyone else.</div>
                </div>
                <div class="m-3">
                    <h4 for="exampleInputPassword1" class="form-label ms-5">Password</h4>
                    <div class="d-flex align-items-center">
                        <i class="fa-solid fa-lock fa-2xl mx-2"></i>
                        <input type="password" class="form-control" id="exampleInputPassword1"
                            placeholder="Enter your Password">
                    </div>
                </div>
                <div class="m-3 form-check">
                    <input type="checkbox" class="form-check-input ms-4 me-2" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Remember me</label>
                </div>
                <div class="text-center m-3">
                    <button type="submit" class="btn btn-secondary px-5 rounded-5">Login</button>
                </div>
                <!-- <div class="m-3 d-flex flex-column text-center">
                    <hr>
                    <p>New User?</p>
                    <p>Don't have an account? <strong><a href="">Register</a></strong></p>
                </div> -->
            </form>
        </section>
        <!-- Form End -->
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
</body>

</html>