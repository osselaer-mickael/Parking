let choiceBody = document.querySelector('#theme');
let choiceBackGroundLeft = document.getElementById('container_left');
let backgroundCard = document.getElementById('card');
let buttonStart = document.getElementById('start');
let choiceLevel = document.getElementById('level');
let label = document.getElementsByTagName('label');
let border = document.querySelector('.border');
let tittleScore = document.querySelector('.tittle');
let backCard = document.querySelectorAll('.back_card');
let myImagies = document.getElementsByTagName('img');
let tittleGame = document.getElementsByClassName('tittle_game');
let nemo = document.getElementsByClassName('nemoimg');
let cinema = document.getElementsByClassName('cinemaimg');
let divCardNemo = document.getElementById('nemo');

choiceBody.addEventListener('change', (e) => {

    if (choiceBody.value === 'nemo') {
        document.body.style.backgroundImage = "url('imageNemo/nemo_background.jpeg')";
        choiceBackGroundLeft.style.backgroundImage = "url('imageNemo/le-monde-de-nemo.jpg')";
        choiceBackGroundLeft.style.backgroundSize = "cover";
        backgroundCard.style.backgroundImage = "url('imageNemo/le-monde-de-nemo.jpg')";
        backgroundCard.style.border = "2px solid white";
        divCardNemo.style.display = "flex";
        divCardNemo.style.flexWrap = "wrap";
        divCardNemo.style.justifyContent = "center";
        divCardNemo.style.alignItems = "center";

        for(let presentationCinema of cinema) {
            presentationCinema.style.display = "none";
        }

        for(let presentationNemo of nemo) {
            presentationNemo.style.border = "2px solid white";
            presentationNemo.style.display = "flex";
            presentationNemo.style.flexWrap = "wrap";
            presentationNemo.style.justifyContent = "center";
            presentationNemo.style.alignItems = "center";
        }

        for(let tittle of tittleGame) {
            tittle.style.color = "#a6c0fe";
        }
    }

    else if (choiceBody.value === 'cinema') {
        document.body.style.backgroundImage = "url('imageCinema/image_background.png')";
        choiceBackGroundLeft.style.backgroundImage = "url('imageCinema/image_card_20thCF.jpg')";
        backgroundCard.style.backgroundImage = "url('imageCinema/image_card_20thCF.jpg')";
        backgroundCard.style.border = "2px solid gold";

        for(let presentationCinema of cinema) {
            presentationCinema.style.display = "flex";
        }

        for(let presentationNemo of nemo) {
            presentationNemo.style.display = "none";
        }

        for(let tittle of tittleGame) {
           tittle.style.color = "gold";
        }
    }
})

buttonStart.addEventListener('click', (e) => {
        choiceBody.style.display = "none";
        choiceLevel.style.display = "none";
        buttonStart.style.display = "none";
        backgroundCard.style.display = "none";
        border.style.display = "none";
        tittleScore.style.margin = "1rem";

        for(let tittle of tittleGame) {
            tittle.style.display = "none";
        }

        for(let image of myImagies) {
            image.style.display = "none";
        }

        for(let lab of label){
            lab.innerHTML = "";
        }

        for(let card of backCard) {

            if(choiceBody.value === 'cinema'){
                card.style.display = "flex";
                card.style.border = "2px solid gold";
                card.style.borderRadius = "1.5rem";
                card.style.width = "16%";
                card.style.height = "15vh";
                card.style.margin = "2rem";
                card.style.backgroundSize = "cover";
                card.style.backgroundImage = "url('imageCinema/image_card_20thCF.jpg')";
            }

            else if (choiceBody.value === 'nemo') {
                card.style.display = "flex";
                card.style.border = "2px solid gold";
                card.style.borderRadius = "1.5rem";
                card.style.width = "16%";
                card.style.height = "15vh";
                card.style.margin = "2rem";
                card.style.backgroundImage = "url('imageNemo/le-monde-de-nemo.jpg')";
                card.style.backgroundSize = "cover";
            }
        }
})

let choiceImagiesCinema = ["brad_pitt.jpg","angelina_jolie.jpg","leonardo_dicaprio.jpg","margaux_robbie.jpg",
    "matt_damon.jpg","milla_jovovich.jpg","ryan_gosling.jpg","scarlett_johansson.jpg"];
let indexRandom = [];

function frontcard() {
    while (indexRandom.length < 16) {
        
    }
randomFrontCard()
}

function randomFrontCard(longueur) {
    let random = Math.random();
    random *= longueur;
    return Math.ceil(random);
}




    





