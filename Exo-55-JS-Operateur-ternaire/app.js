let paragraphe1 = document.getElementById("paragraphe1")
let span1 = document.getElementById("span1");
let span2 = document.getElementById("span2")
let result = document.getElementById("resultat")

let nombre1 = parseInt(span1.innerHTML) ;
let nombre2 = parseInt(span2.innerHTML) ;
let addition = nombre1 + nombre2 ;

result.innerHTML = (addition > 0) ? addition.toString() : (nombre1 + nombre2).toString()