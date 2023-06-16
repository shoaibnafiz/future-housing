<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>

    <link rel="shortcut icon" href="../../image/icons/icon-48x48.png" />
    <!-- Bootstrap Link -->
    <link rel="stylesheet" href="../../styles/bootstrap.min.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> -->
    <!-- Awesome Icon -->
    <script src="https://kit.fontawesome.com/a2afe6c5bb.js" crossorigin="anonymous"></script>
    <!-- Stylesheet Link -->
    <!-- <link rel="stylesheet" href="../../styles/table-background.css"> -->
</head>

<body class="bg-primary">
    <header>
        <!-- Navbar Start -->
        <nav class="navbar">
            <div class="container justify-content-center">
                <h2><a class="navbar-brand text-light" href="index.html">Future Housing</a>
                </h2>
            </div>
        </nav>
        <!-- Navbar End -->
    </header>

    <main>
        <!-- Form Start -->
        <section style="height: 450px; width: 500px;"
            class="col-md-8 col-lg-5 border rounded-4 mx-auto p-5 my-5 shadow-lg bg-body-tertiary text-dark">
            <h2 class="text-center">Admin Login</h2>
            <hr>
            <div class="mt-5">
                <form class="pt-5" action="login-dashboard.php" method="get">

                    <table class="table table-borderless">
                        <tr>
                            <th><i class="bi bi-person-circle"></i> User Name</th>
                            <td>
                                <input type="text" class="form-control border border-dark border-3" name="username"
                                    id="username" value="">
                            </td>
                        </tr>
                        <tr>
                            <th><i class="bi bi-person-circle"></i> Password</th>
                            <td>
                                <input type="password" class="form-control border border-dark border-3" name="password"
                                    id="password" value="">
                            </td>
                        </tr>
                    </table>

                    <div class="text-center p-2">
                        <button type="submit" class="btn btn-outline-primary">Login</button>
                    </div>
                </form>
            </div>
        </section>
        <!-- Form End -->
    </main>

    <!-- Bootstrap JS Link -->
    <script src="../../js/bootstrap.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script> -->
</body>

</html>