document.getElementById('btn-login').addEventListener('click', function () {
    const userEmail = document.getElementById('user-email').value;
    const userPassword = document.getElementById('user-password').value;

    if (userEmail === 'user' && userPassword === 'user') {
        window.location.href = 'dashboard.html';
    }
    else {
        alert('Invalid user.');
    }
})