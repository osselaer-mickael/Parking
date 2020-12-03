let element = document.getElementById('content');

for (let age = 1; age < 100; age++) {
    element.innerHTML += "Le capitaine a " + age + " ans, ";

    if(age < 18){
        element.innerHTML += "le capitaine est jeune";
    }
    else if(age >=18 && age <=50){
        element.innerHTML += "le capitaine n'est pas très âgé";
    }
    else {
        element.innerHTML += "le capitaine est vieux";
    }

    element.innerHTML += "<br>";
}



