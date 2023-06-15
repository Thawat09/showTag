function updateTable3() {
    var xhr = new XMLHttpRequest();
    xhr.open('GET', 'models/room_3_model.php', true);
    xhr.onreadystatechange = function () {
        if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
            var response = xhr.responseText;
            var tableContainer = document.getElementById('table-data3');
            tableContainer.innerHTML = response;
        }
    };
    xhr.send();
}

function updateEquipmentCounts3() {
    var xhr = new XMLHttpRequest();
    xhr.open('GET', 'models/count3.php', true);
    xhr.onreadystatechange = function () {
        if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
            var response = JSON.parse(xhr.responseText);
            document.getElementById('all-equipment-count3').textContent = response.allEquipmentCount;
            document.getElementById('detect-count3').textContent = response.detectCount;
        }
    };
    xhr.send();
}

setInterval(updateTable3, 2000);
setInterval(updateEquipmentCounts3, 2000);