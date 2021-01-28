/* Voici un exemple de fonction retournant du texte, inspirez vous de cet exemple pour réaliser l'exercice */
function txtInsert() {
    return txtReturn();
}

function backgroundSet() {
    return "magenta";
}

function txtReturn() {
    return "j'aime pas le javascript";
}







/* Ne modifiez pas le code suivant */

document.getElementById('container').innerHTML = txtInsert();
document.getElementById('container').style.background = backgroundSet();




