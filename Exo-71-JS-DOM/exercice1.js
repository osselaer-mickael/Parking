let monDiv = document.createElement('div');
    monDiv.innerHTML = "Ce div a été ajouté en utilisant javascript";
let mondiv2 = document.createElement('div');
    mondiv2.style.backgroundColor = 'red';
    mondiv2.prepend(monDiv);
    mondiv2.style.width = "100px";
    mondiv2.style.height = "100px";

document.getElementById('viewport').appendChild(monDiv);

let deleteSpan = document.getElementById('aSupprimer');
    deleteSpan.remove();










