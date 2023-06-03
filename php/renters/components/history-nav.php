<nav class="navbar navbar-expand-md bg-body-tertiary">
    <div class="container">
        <h2><a class="navbar-brand" href="dashboard.php?username=<?= $_username; ?>">Future Housing</a>
        </h2>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul id="navbar-nav" class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                    <a class="nav-link <?php if ($currentPage === 'flat-rents') echo 'active'; ?>"
                        href="history-flat-rents.php?username=<?= $_username; ?>&flat=<?= $_flat?>">Flat
                        Rent &
                        Utility Bills</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($currentPage === 'guests') echo 'active'; ?>"
                        href="history-guests.php?username=<?= $_username; ?>&flat=<?= $_flat?>">All
                        Guests</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($currentPage === 'tasks') echo 'active'; ?>"
                        href="history-tasks.php?username=<?= $_username; ?>&flat=<?= $_flat?>">Tasks</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($currentPage === 'complains') echo 'active'; ?>"
                        href="history-complains.php?username=<?= $_username; ?>&flat=<?= $_flat?>">Complains</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../../index.php">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>