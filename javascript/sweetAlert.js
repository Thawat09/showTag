function submitForm() {
    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;
    var xhr = new XMLHttpRequest();

    xhr.open('POST', 'models/login_model.php', true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhr.onload = function () {
        if (xhr.status === 200) {
            var response = JSON.parse(xhr.responseText);
            if (response.success) {
                window.location.href = 'index.php';
            } else {
                Swal.fire({
                    title: 'Invalid Credentials',
                    text: 'Invalid username or password',
                    icon: 'error',
                    confirmButtonText: 'OK'
                });
            }
        }
    };

    var data = 'username=' + encodeURIComponent(username) + '&password=' + encodeURIComponent(password);
    xhr.send(data);
}  