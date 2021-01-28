//je récupére mes éléments
const COMMENCER = document.getElementById('commencer');
let score1 = document.getElementById('para1');
let score2 = document.getElementById('para2');
let result = document.getElementById('para3');

//fonctionnalitée du bouton "Commencer"
COMMENCER.addEventListener('click', function (){
    score1.innerHTML = "0";
    score2.innerHTML = "0";
    result.innerHTML = " ";
    joueur1.innerHTML = " ";
    joueur2.innerHTML = " ";
    joueur1.style.backgroundImage = "none";
    joueur2.style.backgroundImage = "none";
    mesPoints = 0;
    pointsDuBot = 0;
    alert("tu es un tricheur!!!");
})

//je récupére les boutons (#bouton_jeu), et les divs dans les quels les couleurs s'afficheront lors du click (#camp)
let bouton1 = document.getElementById('bouton_jeu1');
let bouton2 = document.getElementById('bouton_jeu2');
let bouton3 = document.getElementById('bouton_jeu3');
let joueur1 = document.getElementById('camp1');
let joueur2 = document.getElementById('camp2');

let choix ;


//fonctionnalitée des boutons 1, 2 et 3 : (pierre) (papier) (ciseau)
bouton1.addEventListener('click', function () {
    let random = robot();
    joueur1.style.backgroundImage = "url('SPOILER_pierre.png')";
    choix = "pierre";
    affichageGlobal(random);
    resultat(random);
});

bouton2.addEventListener('click', function () {
    let random = robot();
    joueur1.style.backgroundImage = "url('SPOILER_papier.png')";
    choix = "papier";
    affichageGlobal(random);
    resultat(random);
});

bouton3.addEventListener('click', function () {
    let random = robot();
    joueur1.style.backgroundImage = "url('SPOILER_ciseau.png')";
    choix = "ciseau";
    affichageGlobal(random);
    resultat(random);
});

//
function robot() {
    let choixBot ;
    let monChiffre = Math.trunc(Math.random() * 3) + 1
    switch (monChiffre) {
        case 1:
            choixBot = "pierre";
            break;
        case 2:
            choixBot = "papier";
            break;
        case 3:
            choixBot = "ciseau"
            break;
    }
    return choixBot
}

function affichageGlobal(choixbot) {
    switch (choixbot) {
        case "pierre":
            joueur2.style.backgroundImage = "url('SPOILER_pierre.png')";
            break;
        case "papier":
            joueur2.style.backgroundImage = "url('SPOILER_papier.png')";
            break;
        case "ciseau":
            joueur2.style.backgroundImage = "url('SPOILER_ciseau.png')";
            break;
    }
}

let mesPoints = 0;
let pointsDuBot = 0;

function resultat(leChoixDuBot) {
    switch (choix) {
        case "pierre":
            switch (leChoixDuBot) {
                case "pierre":
                    result.innerHTML = " Egalitée";
                    break;
                case "papier":
                    result.innerHTML = " Perdu";
                    pointsDuBot++;
                    score2.innerHTML = pointsDuBot;
                    break;
                case "ciseau":
                    result.innerHTML = "Gagné";
                    mesPoints++
                    score1.innerHTML = mesPoints;
            }
            break;
        case "papier":
            switch (leChoixDuBot) {
                case "pierre":
                    result.innerHTML = "Gagné";
                    mesPoints++;
                    score1.innerHTML = mesPoints;
                    break;
                case "papier":
                    result.innerHTML = "Egalitée";
                    break;
                case "ciseau":
                    result.innerHTML = "Perdu";
                    pointsDuBot++;
                    score2.innerHTML = pointsDuBot;
                    break;
            }
            break;
        case "ciseau":
            switch (leChoixDuBot) {
                case "pierre":
                    result.innerHTML = "Perdu";
                    pointsDuBot++;
                    score2.innerHTML = pointsDuBot;
                    break;
                case "papier":
                    result.innerHTML = "Gagné";
                    mesPoints++;
                    score1.innerHTML = mesPoints;
                    break;
                case "ciseau":
                    result.innerHTML = "Egalitée";
                    break;
            }
            break;
    }
    victoire();
}

function victoire() {
    if(mesPoints === 2) {
        result.innerHTML = "VICTOIRE";
        window.setTimeout(recommencer, 2000);
    }
    else if(pointsDuBot === 2) {
        result.innerHTML = "PERDU";
        window.setTimeout(recommencer, 2000);
    }
}

function recommencer() {
    score1.innerHTML = "0";
    score2.innerHTML = "0";
    result.innerHTML = " ";
    joueur1.innerHTML = " ";
    joueur2.innerHTML = " ";
    joueur1.style.backgroundImage = "none";
    joueur2.style.backgroundImage = "none";
    mesPoints = 0;
    pointsDuBot = 0;
}