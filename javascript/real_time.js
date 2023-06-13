function updateTableData() {
    var xhr = new XMLHttpRequest();
    xhr.open('GET', 'models/room_1_model.php', true);
    xhr.onload = function() {
        if (xhr.status === 200) {
            var responseData = xhr.responseText;
            var data = JSON.parse(responseData);
            var tableBody = document.getElementById('table-data').getElementsByTagName('tbody')[0];
            tableBody.innerHTML = '';

            for (var i = 0; i < data.length; i++) {
                var row = '<tr>' +
                    '<td class="text-center">' + data[i].name + '</td>' +
                    '<td class="text-center">' + data[i].matching + '</td>' +
                    '<td class="text-center">' + data[i].date + '</td>' +
                    '</tr>';
                tableBody.innerHTML += row;
            }
        }
    };
    xhr.send();
}
updateTableData();
setInterval(updateTableData, 5000);

function updateEquipmentCounts() {
    var xhr = new XMLHttpRequest();
    xhr.open('GET', 'models/count.php', true);
    xhr.onload = function() {
        if (xhr.status === 200) {
            var responseData = xhr.responseText;
            var counts = JSON.parse(responseData);
            var allEquipmentCount = document.getElementById('all-equipment-count');
            var detectCount = document.getElementById('detect-count');
            allEquipmentCount.textContent = counts.allEquipmentCount;
            detectCount.textContent = counts.detectCount;
        }
    };
    xhr.send();
}
updateEquipmentCounts();
setInterval(updateEquipmentCounts, 5000);