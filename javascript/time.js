function updateTime() {
    var now = new Date();
    var timeElement = document.getElementById("time");
    var dateElement = document.getElementById("date");
    var hours = now.getHours().toString().padStart(2, "0");
    var minutes = now.getMinutes().toString().padStart(2, "0");
    var seconds = now.getSeconds().toString().padStart(2, "0");
    var day = now.getDate().toString().padStart(2, "0");
    var month = (now.getMonth() + 1).toString().padStart(2, "0");
    var year = now.getFullYear().toString();
    timeElement.textContent = hours + ":" + minutes + ":" + seconds;
    dateElement.textContent = day + "-" + month + "-" + year;
}
setInterval(updateTime, 1000);