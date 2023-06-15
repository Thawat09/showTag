function updateTable2() {
    var xhr = new XMLHttpRequest();
    xhr.open('GET', 'models/room_2_model.php', true);
    xhr.onreadystatechange = function () {
        if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
            var response = xhr.responseText;
            var tableContainer = document.getElementById('table-data2');
            tableContainer.innerHTML = response;
        }
    };
    xhr.send();
}

function updateEquipmentCounts2() {
    var xhr = new XMLHttpRequest();
    xhr.open('GET', 'models/count2.php', true);
    xhr.onreadystatechange = function () {
        if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
            var response = JSON.parse(xhr.responseText);
            document.getElementById('all-equipment-count2').textContent = response.allEquipmentCount;
            document.getElementById('detect-count2').textContent = response.detectCount;
        }
    };
    xhr.send();
}

setInterval(updateTable2, 2000);
setInterval(updateEquipmentCounts2, 2000);