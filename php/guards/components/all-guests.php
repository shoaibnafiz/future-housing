<table class="table table-striped bg-color border border-3 border-black" id="table">
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
            <th class="p-3 text-center border border-2 border-black" scope="col">Action</th>
        </tr>
    </thead>
    <tbody>

        <?php
        foreach($guests as $guest):
        ?>

        <tr>
            <td class="p-3 text-center border border-2 border-black">
                <?= $guest['flat']; ?>
            </td>
            <td class="p-3 text-center border border-2 border-black">
                <?= $guest['host_name']; ?>
            </td>
            <td class="p-3 text-center border border-2 border-black">
                <?= $guest['guest_name']; ?>
            </td>
            <td class="p-3 text-center border border-2 border-black">
                <?= $guest['guest_cell']; ?>
            </td>
            <td class="p-3 text-center border border-2 border-black">
                <?= $guest['total_guest']; ?>
            </td>
            <td class="p-3 text-center border border-2 border-black">
                <?= $guest['visit_purpose']; ?>
            </td>
            <td class="p-3 text-center border border-2 border-black">
                <?= date('j F, Y', strtotime($guest['date'])); ?>
            </td>
            <td class="p-3 text-center border border-2 border-black">
                <?= date('g:i A', strtotime($guest['time'])); ?>
            </td>
            <td class="p-3 text-center text-center border border-2 border-black">
                <?php
                    if($guest['status']):
                ?>
                Already Came
                <?php
                    else:
                ?>
                <a class="text-success fw-semibold" href="guest-complete.php?id= <?= $guest['id']; ?>">Didn't Came</a>
                <?php
                    endif;
                ?>
            </td>
        </tr>

        <?php
            endforeach;
        ?>

    </tbody>
</table>