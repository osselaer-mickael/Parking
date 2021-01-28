let hours = document.getElementById('heure');
let minutes = document.getElementById('minute');
let seconds = document.getElementById('seconde');

function refreshClock() {
    let date = new Date();
    let hr = date.getHours();
    let min = date.getMinutes();
    let sec = date.getSeconds();

    hours.style.transform = "translate(-50%, -100%)";
    hours.style.transform += "rotate(" + ( (hr * 360 / 12) + (min * 30 / 60) ) + "deg)";

    minutes.style.transform = "translate(-50%, -100%)";
    minutes.style.transform += "rotate(" + ( (min * 360 / 60) + (sec * 6 / 60) ) + "deg";

    seconds.style.transform = "translate(-50%, -100%)";
    seconds.style.transform += "rotate(" + ( (sec * 360 / 60) ) + "deg)";


    window.setInterval(refreshClock, 1000);
}

refreshClock();

