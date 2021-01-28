

document.getElementById('up').addEventListener('click',function() {
    let t = parseInt(document.getElementById('kenny').style.top);
    t = t - 10;
    if(t > 0) {
        document.getElementById('kenny').style.top = t + 'px';
    }
});

document.getElementById('down').addEventListener('click', function() {
    let b = parseInt(document.getElementById('kenny').style.top);
    b = b + 10;
    if(b < 460) {
        document.getElementById('kenny').style.top = b + 'px';
    }
});

document.getElementById('left').addEventListener('click', function() {
    let g = parseInt(document.getElementById('kenny').style.left);
    g = g - 10;
    if(g > 0) {
        document.getElementById('kenny').style.left = g + 'px';
    }

    else if (g < 50) {
        document.getElementById('kenny').style.left = 200 + 'px';
        document.getElementById('kenny').style.top = 200 + 'px';
        alert("Kenny est mort");
        compteur++;
        spanCompteur.innerHTML = "nombre de mort" + " " + compteur;

    }


});

document.getElementById('right').addEventListener('click', function() {
    let d = parseInt(document.getElementById('kenny').style.left);
    d = d + 10;
    if(d < 460) {
        document.getElementById('kenny').style.left = d + 'px';
    }
});

let zoneRouge = document.createElement("div");
zoneRouge.style.backgroundColor = "red";
zoneRouge.style.width = "50px";
zoneRouge.style.height = "500px";
let viewport = document.getElementById('viewport');
viewport.prepend(zoneRouge);

let compteur = 0;

let spanCompteur= document.createElement('span');
spanCompteur.innerHTML = "nombre de mort" + " " + compteur;

let body = document.body;
body.append(spanCompteur);

body.addEventListener('keydown', function (event){
    if(event.key === "ArrowUp") {
        let t = parseInt(document.getElementById('kenny').style.top);
        t = t - 10;
        if(t > 0) {
            document.getElementById('kenny').style.top = t + 'px';
        }
    }
    else if (event.key === "ArrowDown") {
        let b = parseInt(document.getElementById('kenny').style.top);
        b = b + 10;
        if (b < 460) {
            document.getElementById('kenny').style.top = b + 'px';
        }
    }
    else if(event.key === "ArrowRight") {
        let d = parseInt(document.getElementById('kenny').style.left);
        d = d + 10;
        if(d < 460) {
            document.getElementById('kenny').style.left = d + 'px';
        }
    }
    else if (event.key === "ArrowLeft") {
        let g = parseInt(document.getElementById('kenny').style.left);
        g = g - 10;
        if(g > 0) {
            document.getElementById('kenny').style.left = g + 'px';
        }

        else if (g < 50) {
            document.getElementById('kenny').style.left = 200 + 'px';
            document.getElementById('kenny').style.top = 200 + 'px';
            alert("Kenny est mort");
            compteur++;
            spanCompteur.innerHTML = "nombre de mort" + " " + compteur;
        }
    }
})





