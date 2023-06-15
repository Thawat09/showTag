function updateTable1() {
    var xhr = new XMLHttpRequest();
    xhr.open('GET', 'models/room_1_model.php', true);
    xhr.onreadystatechange = function () {
        if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
            var response = xhr.responseText;
            document.getElementById('table-data1').innerHTML = response;
        }
    };
    xhr.send();
}

function updateEquipmentCounts1() {
    var xhr = new XMLHttpRequest();
    xhr.open('GET', 'models/count1.php', true);
    xhr.onreadystatechange = function () {
        if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
            var response = JSON.parse(xhr.responseText);
            document.getElementById('all-equipment-count1').textContent = response.allEquipmentCount;
            document.getElementById('detect-count1').textContent = response.detectCount;
        }
    };
    xhr.send();
}

setInterval(updateTable1, 2000);
setInterval(updateEquipmentCounts1, 2000);