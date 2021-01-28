let monDiv1 = document.getElementById('timestamp');
let monDiv2 = document.getElementById('localTime');
let monDiv3 = document.getElementById('localDate');
let monDiv4 = document.getElementById('createDate');

let date1 = Date.now();
monDiv1.innerHTML = date1;

let date2 = new Date();
monDiv2.innerHTML = date2.toLocaleDateString()

let date3 = new Date();
monDiv3.innerHTML = date3.toLocaleTimeString();

let date4 = new Date();
date4.setDate(5);
date4.setMonth(10);
date4.setFullYear(2019);
date4.setHours(20);
date4.setMinutes(30);
date4.setSeconds(20);
date4.setMilliseconds(3800);
monDiv4.innerHTML = date4;