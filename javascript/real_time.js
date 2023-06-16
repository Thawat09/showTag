function updateTable(room) {
    var xhr = new XMLHttpRequest();
    xhr.open('GET', 'models/room_model.php?room=' + room, true);
    xhr.onreadystatechange = function () {
        if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
            var response = xhr.responseText;
            document.getElementById('table-data').innerHTML = response;
        }
    };
    xhr.send();
}

function updateEquipmentCounts(room) {
    var xhr = new XMLHttpRequest();
    xhr.open('GET', 'models/count_model.php?room=' + room, true);
    xhr.onreadystatechange = function () {
        if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
            var responseText = xhr.responseText;
            var jsonStartIndex = responseText.indexOf('{');
            var jsonString = responseText.substring(jsonStartIndex);
            var response = JSON.parse(jsonString);
            document.getElementById('all-equipment-count').textContent = response.allEquipmentCount;
            document.getElementById('detect-count').textContent = response.detectCount;
        }
    };
    xhr.send();
}

window.onload = function () {
    const urlParams = new URLSearchParams(window.location.search);
    const room = urlParams.get('room');

    updateTable(room);
    updateEquipmentCounts(room);

    const sidebarLinks = document.getElementsByClassName('sidebar-link');
    for (let i = 0; i < sidebarLinks.length; i++) {
        const link = sidebarLinks[i];
        const linkRoom = link.getAttribute('href').split('=')[1];
        if (linkRoom === room) {
            link.classList.add('active');
        }
    }

    setInterval(function () {
        updateTable(room);
        updateEquipmentCounts(room);
    }, 2000);
};