document.getElementById('btn-login').addEventListener('click', function () {
    const userEmail = document.getElementById('user-email').value;
    const userPassword = document.getElementById('user-password').value;
    const userAcountType = document.getElementById('acount-type').value;

    if (userEmail === 'user@gmail.com' && userPassword === 'user' && userAcountType === "user") {
        window.location.href = 'dashboard.html';
    }
    else {
        alert('Invalid user.');
    }
})