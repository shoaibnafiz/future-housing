<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
        <h2><a class="navbar-brand" href="guard-dashboard.php?username=<?=$_username?>">Future
                Housing</a></h2>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                    <a class="nav-link <?php if ($currentPage === 'home') echo 'active'; ?>"
                        href="guard-dashboard.php?username=<?=$_username?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($currentPage === 'find-guests') echo 'active'; ?>"
                        href="find-guests.php?username=<?=$_username?>">Guests</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($currentPage === 'guards-details') echo 'active'; ?>"
                        href="guards-details.php?username=<?=$_username?>">Guards</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../../index.php">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>