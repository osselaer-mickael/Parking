let used = document.getElementById('utilise');
let test = document.getElementById('test');
let reset = document.getElementById('reset');
let cible = Math.floor(Math.random() * 100) + 1;
let button = document.getElementById('valider');
let compteur = 1;

used.style.fontSize = "3rem";
used.style.textAlign = "center";

reset.addEventListener('click', function () {
    compteur = 1;
})
button.addEventListener('click', function () {
    let nombre = parseInt(test.value);

    if (nombre === cible) {
        used.innerHTML = "Bravo";
    } else if (nombre > cible) {
        used.innerHTML = "trop grand";
    } else if (nombre < cible) {
        used.innerHTML = "trop petit";
    } else {
        used.innerHTML = "ce n'est pas un chiffre";
    }

    compteur++;
});


