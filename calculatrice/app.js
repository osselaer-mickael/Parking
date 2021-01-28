let cadran = document.getElementById('cadran');

let bouton0 = document.getElementById('grand_bouton');
bouton0.addEventListener('click', function (){
    cadran.innerText = cadran.innerHTML + 0;
})

let bouton1 = document.getElementById('bouton13');
bouton1.addEventListener('click', function (){
    cadran.innerText = cadran.innerHTML + 1;
})

let bouton2 = document.getElementById('bouton14');
bouton2.addEventListener('click', function () {
    cadran.innerText = cadran.innerHTML + 2;
})

let bouton3 = document.getElementById('bouton15');
bouton3.addEventListener('click', function () {
    cadran.innerText = cadran.innerHTML + 3;
})

let bouton4 = document.getElementById('bouton9');
bouton4.addEventListener('click', function (){
    cadran.innerText = cadran.innerHTML + 4;
})

let bouton5 = document.getElementById('bouton10');
bouton5.addEventListener('click', function (){
    cadran.innerText = cadran.innerHTML + 5;
})

let bouton6 = document.getElementById('bouton11');
bouton6.addEventListener('click', function (){
    cadran.innerText = cadran.innerHTML + 6;
})

let bouton7 = document.getElementById('bouton5');
bouton7.addEventListener('click', function (){
    cadran.innerText = cadran.innerHTML + 7;
})

let bouton8 = document.getElementById('bouton6');
bouton8.addEventListener('click', function (){
    cadran.innerText = cadran.innerHTML + 8;
})

let bouton9 = document.getElementById('bouton7');
bouton9.addEventListener('click', function (){
    cadran.innerText = cadran.innerHTML + 9;
})

let boutonPoint = document.getElementById('bouton18');
bouton18.addEventListener('click', function () {
    cadran.innerText = cadran.innerHTML + ".";
})

let boutonAc = document.getElementById('bouton1');
boutonAc.addEventListener('click', function (){
    cadran.innerText = " ";
})

let boutonEgal = document.getElementById('bouton19');
boutonEgal.addEventListener('click', function (){
    cadran.innerHTML = eval(cadran.innerHTML);
})

let boutonPlus = document.getElementById('bouton16');
boutonPlus.addEventListener('click', function (){
    cadran.innerText = cadran.innerHTML + "+";
})

let boutonMoin = document.getElementById('bouton12');
boutonMoin.addEventListener('click', function (){
    cadran.innerText = cadran.innerHTML + "-";
})

let boutonMult = document.getElementById('bouton8');
boutonMult.addEventListener('click', function (){
    cadran.innerText = cadran.innerHTML + "*";
})

let boutonDiv = document.getElementById('bouton4');
boutonDiv.addEventListener('click', function (){
    cadran.innerText = cadran.innerHTML + "/";
})

let boutonMod = document.getElementById('bouton3');
boutonMod.addEventListener('click', function (){
    cadran.innerText = cadran.innerHTML + "%";
})