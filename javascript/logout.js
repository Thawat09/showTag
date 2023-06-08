document.getElementById('logoutBtn').addEventListener('click', function () {
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'models/logout_model.php', true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhr.onload = function () {
        if (xhr.status === 200) {
            window.location.href = 'login.php';
        } else {
            console.log('เกิดข้อผิดพลาดในการออกจากระบบ');
        }
    };
    xhr.send('logout=true');
});