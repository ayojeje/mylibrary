

document.getElementById('logoutbtn')
    .addEventListener('click', function () {
        if (confirm('are you sure you wantto log out?')) {
            window.location.href = 'dashboard.php';
        }
    });