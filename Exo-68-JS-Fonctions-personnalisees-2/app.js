let mesPara = document.getElementsByTagName('p');

function nombreAlea() {
    let randomNumber = Math.random();
    randomNumber *= 100;
    return Math.ceil(randomNumber);
}

nombreAlea();

for (let i=0; i < 0; i++) {
    mesPara.innerHTML = nombreAlea().toString();
}