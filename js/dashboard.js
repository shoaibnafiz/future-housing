const displayProfile = () => {
    const profileContainer = document.getElementById('profile-container');
    const profileDiv = document.createElement('div');
    profileDiv.classList.add('bg-color', 'text-light', 'row', 'col-lg-8', 'border', 'rounded-4', 'mx-auto', 'p-5', 'my-5', 'shadow-lg');
    profileDiv.innerHTML = `
        <div class="col-md-4 text-center mb-3">
            <img src="image/users/user.jpg" class="mt-2 1img-fluid rounded" style="width: 180px; height: 180px;"
                alt="">
            <div>
                <a href="profile-edit.html"><button class="mx-auto m-1 btn btn-secondary">Edit</button></a>
                <!-- <button class="mx-auto m-1 btn-sm btn btn-secondary">Delete</button>
                <button class="mx-auto m-1 btn-sm btn btn-secondary">Logout</button> -->
            </div>
        </div>
        <div class="col-md-8">
            <h2>User Profile</h2>
            <table class="table table-striped">
                <tr>
                    <th colspan="2">User Details:</th>
                </tr>
                <tr>
                    <th><i class="bi bi-person-circle"></i> Name</th>
                    <td>John Doe</td>
                </tr>
                <tr>
                    <th><i class="bi bi-envelope"></i> Email</th>
                    <td>email@email.com</td>
                </tr>
                <tr>
                    <th><i class="bi bi-phone"></i> Phone</th>
                    <td>01812345678</td>
                </tr>
                <tr>
                    <th><i class="bi bi-buildings-fill"></i> Flat No</th>
                    <td>201</td>
                </tr>
                <tr>
                    <th><i class="bi bi-person-square"></i> NID No</th>
                    <td>81812345678</td>
                </tr>
                <tr>
                    <th><i class="bi bi-gender-ambiguous"></i> Gender</th>
                    <td>Male</td>
                </tr>
                <tr>
                    <th><i class="bi bi-person-badge"></i> Acount Type</th>
                    <td>Renter</td>
                </tr>
            </table>
        </div>
    `;
    profileContainer.appendChild(profileDiv);
}

displayProfile();
/* document.getElementById('btn-profile').addEventListener('click', function () {
    const profileContainer = document.getElementById('profile-container');

    profileContainer.classList.remove('d-none');
})
document.getElementById('btn-guests').addEventListener('click', function () {
    window.location.href = "invite-guests.html";
}) */