const sidebarToggle = document.querySelector("#sidebar-toggle");
sidebarToggle.addEventListener("click", function(){
    document.querySelector("#sidebar").classList.toggle("collapsed");
});

document.getElementById("prevDay").addEventListener("click", function() {
    changeDay(-1);
});

document.getElementById("nextDay").addEventListener("click", function() {
    changeDay(1);
});

function changeDay(offset) {
    const currentDayElement = document.querySelector(".current-day");
    const currentDay = parseInt(currentDayElement.textContent);
    const newDay = currentDay + offset;
    if (newDay >= 1 && newDay <= 31) {
        currentDayElement.classList.remove("current-day");
        const newDayElement = document.getElementById("day" + newDay);
        newDayElement.classList.add("current-day");
        const eventInfo = document.getElementById("eventInfo");
        eventInfo.textContent = `Schedule for day ${newDay}:`;
    }
}