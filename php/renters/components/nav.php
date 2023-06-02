<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
        <h2><a class="navbar-brand" href="dashboard.php?username=<?= $renter['username']; ?>">Future
                Housing</a></h2>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                    <a class="nav-link <?php if ($currentPage === 'home') echo 'active'; ?>"
                        href="dashboard.php?username=<?= $renter['username']; ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($currentPage === 'profile') echo 'active'; ?>"
                        href="profile-edit.php?username=<?= $renter['username']; ?>">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($currentPage === 'flat-rent') echo 'active'; ?>"
                        href="flat-rent.php?username=<?= $renter['username']; ?>">Flat Rent</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($currentPage === 'invite-guests') echo 'active'; ?>"
                        href="invite-guests.php?username=<?= $renter['username']; ?>">Guests</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($currentPage === 'task') echo 'active'; ?>"
                        href="task.php?username=<?= $renter['username']; ?>">Task</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($currentPage === 'complain') echo 'active'; ?>"
                        href="complain.php?username=<?= $renter['username']; ?>">Complain</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($currentPage === 'guards') echo 'active'; ?>"
                        href="guards.php?username=<?= $renter['username']; ?>">Guards</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../../index.php">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- Navbar End -->