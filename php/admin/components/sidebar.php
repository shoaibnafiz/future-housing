<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="admin-dashboard.php">
            <span class="align-middle">Dashboard</span>
        </a>

        <ul class="sidebar-nav">

            <li class="sidebar-header">
                Pages
            </li>

            <li class="sidebar-item  <?php if ($currentPage === 'dashboard') echo 'active'; ?>">
                <a class="sidebar-link" href="admin-dashboard.php">
                    <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
                </a>
            </li>

            <li class="sidebar-item  <?php if ($currentPage === 'flats') echo 'active'; ?>">
                <a class="sidebar-link" href="flats.php">
                    <i class="align-middle" data-feather="home"></i> <span class="align-middle">Flats</span>
                </a>
            </li>

            <li class="sidebar-item  <?php if ($currentPage === 'requests') echo 'active'; ?>">
                <a class="sidebar-link" href="request-renters.php">
                    <i class="align-middle" data-feather="user-plus"></i> <span class="align-middle">Renter
                        Request</span>
                </a>
            </li>

            <li class="sidebar-item  <?php if ($currentPage === 'renters') echo 'active'; ?>">
                <a class="sidebar-link" href="renters.php">
                    <i class="align-middle" data-feather="users"></i> <span class="align-middle">Renters</span>
                </a>
            </li>

            <li class="sidebar-item  <?php if ($currentPage === 'flat-rents') echo 'active'; ?>">
                <a class="sidebar-link" href="flat-rents.php">
                    <i class="align-middle" data-feather="book"></i> <span class="align-middle">Rent History</span>
                </a>
            </li>

            <li class="sidebar-item  <?php if ($currentPage === 'guests-invitations') echo 'active'; ?>">
                <a class="sidebar-link" href="guests-invitations.php">
                    <i class="align-middle" data-feather="user-x"></i> <span class="align-middle">Guest
                        Invitations</span>
                </a>
            </li>

            <li class="sidebar-item  <?php if ($currentPage === 'notices') echo 'active'; ?>">
                <a class="sidebar-link" href="notices.php">
                    <i class="align-middle" data-feather="edit"></i> <span class="align-middle">Notices</span>
                </a>
            </li>

            <li class="sidebar-item  <?php if ($currentPage === 'events') echo 'active'; ?>">
                <a class="sidebar-link" href="events.php">
                    <i class="align-middle" data-feather="calendar"></i> <span class="align-middle">Events</span>
                </a>
            </li>

            <li class="sidebar-item  <?php if ($currentPage === 'tasks') echo 'active'; ?>">
                <a class="sidebar-link" href="tasks.php">
                    <i class="align-middle" data-feather="clipboard"></i> <span class="align-middle">Tasks</span>
                </a>
            </li>

            <li class="sidebar-item  <?php if ($currentPage === 'complains') echo 'active'; ?>">
                <a class="sidebar-link" href="complains.php">
                    <i class="align-middle" data-feather="clipboard"></i> <span class="align-middle">Complains</span>
                </a>
            </li>

            <li class="sidebar-item  <?php if ($currentPage === 'guards') echo 'active'; ?>">
                <a class="sidebar-link" href="guards.php">
                    <i class="align-middle" data-feather="shield"></i> <span class="align-middle">Guards</span>
                </a>
            </li>

        </ul>

    </div>
</nav>