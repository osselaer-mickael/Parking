let time = document.getElementById('chrono');
let countdown = parseInt(time.innerHTML) - 1;

while(countdown > 0) {
    time.innerHTML += "<br>" + countdown + " secondes";
    countdown--;
}


