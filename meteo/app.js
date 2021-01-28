let apiKey = "d22144283c7af968063d48d0ce8b5996";
let city = "Anor";
let url = "https://api.openweathermap.org/data/2.5/weather?q=" + city + "&units=metric&appid=" + apiKey + "&lang=fr";

let xhr = new XMLHttpRequest();
xhr.responseType = "json";
xhr.open("GET", url);

xhr.onload = function() {
    if(xhr.status === 200) {
        console.log(xhr.response);
        // traiter réponse.
        let meteo = xhr.response;
        console.log(meteo.name);
        let ville = document.getElementsByClassName('ville')[0];
        ville.innerHTML = meteo.name;
        let temps = document.getElementsByClassName('temps')[0];
        temps.innerHTML = meteo.weather[0].description;
        let temperature = document.getElementsByClassName('temperature') [0];
        temperature.innerHTML = Math.trunc(meteo.main.temp) + " °C";
        let souffle = document.getElementsByClassName('vent') [0];
        souffle.innerHTML = meteo.wind.speed + " m/s";
        let humide = document.getElementsByClassName(' humidité') [0];
        humide.innerHTML = meteo.main.humidity + " %";
        let press = document.getElementsByClassName('pression')[0];
        press.innerHTML = meteo.main.pressure + " hpa";
        let visible = document.getElementsByClassName('visibilité')[0];
        visible.innerHTML = meteo.visibility + " métres";
        afficherFond(meteo.weather[0].description);
    }
}

xhr.send();

function afficherFond (temps) {
    if(temps === "couvert") {
        document.getElementById('container').style.backgroundImage = "url('image2.jpg')";
    }
}
