document.getElementById('logoutBtn').addEventListener('click', function () {
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'models/logout_model.php', true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhr.onload = function () {
        if (xhr.status !== 200) {
            console.log('เกิดข้อผิดพลาดในการออกจากระบบ');
        }
        window.location.href = 'login.php';
    };
    xhr.send('logout=true');
});