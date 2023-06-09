<div class="container row justify-content-center">
    <div class="col-sm-6">
        <table class="table bg-secondary rounded-4 table-striped">
            <tr>
                <th class="text-light ps-4 pt-3"><i class="bi bi-person-circle"></i> Guest Name</th>
                <td>
                    <input type="text" class="form-control" name="guest_name" value="<?= $guest['guest_name']; ?>"
                        disabled>
                </td>
            </tr>
            <tr>
                <th class="text-light ps-4 pt-3"><i class="bi bi-phone"></i> Guest Cell</th>
                <td>
                    <input type="text" class="form-control" name="guest_cell" value="<?= $guest['guest_cell']; ?>"
                        disabled>
                </td>
            </tr>
            <tr>
                <th class="text-light ps-4 pt-3"><i class="bi bi-people-fill"></i> Total Guests</th>
                <td>
                    <input type="text" class="form-control" name="total_guest" value="<?= $guest['total_guest']; ?>"
                        disabled>
                </td>
            </tr>
            <tr>
                <th class="text-light ps-4 pt-3"><i class="bi bi-patch-question-fill"></i> Visit Purpose</th>
                <td>
                    <input type="text" class="form-control" name="visit_purpose" value="<?= $guest['visit_purpose']; ?>"
                        disabled>
                </td>
            </tr>
            <tr>
                <th class="text-light ps-4 pt-3"><i class="bi bi-calendar3-event-fill"></i> Date</th>
                <td>
                    <input type="date" class="form-control" name="date" value="<?= $guest['date']; ?>" disabled>
                </td>
            </tr>
            <tr>
                <th class="text-light ps-4 pt-3"><i class="bi bi-clock-fill"></i> Time</th>
                <td>
                    <input type="time" class="form-control" name="time" value="<?= $guest['time']; ?>" disabled>
                </td>
            </tr>
            <tr>
                <th class="text-light ps-4 pt-3"><i class="bi bi-buildings-fill"></i> Invited in Flat</th>
                <td>
                    <input type="text" class="form-control" name="flat" value="<?= $guest['flat']; ?>" disabled>
                </td>
            </tr>
            <tr>
                <th class="text-light ps-4 pt-3"><i class="bi bi-person-circle"></i> Invited by</th>
                <td>
                    <input type="text" class="form-control" name="host_name" value="<?= $guest['host_name']; ?>"
                        disabled>
                </td>
            </tr>
            <tr>
                <th></th>
                <td class="float-end"><button class="btn btn-dark"><a
                            class="text-light text-decoration-none fw-semibold"
                            href="guest-complete.php?id= <?= $guest['id']; ?>">Done</a></button>
                </td>
            </tr>
        </table>
    </div>
</div>