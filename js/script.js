// Le script à pour but d'effectuer les calculs du simulateurs la difficulté est de détecter les deux derniers champs qui ont été modifiés et de calculer le 3ème
//Initialisation variables
let elementEmprun = document.getElementById('emprun');
let elementMensualites = document.getElementById('mensualites');
let elementDuree = document.getElementById('duree');
let ordreModification = []  // Sert savoir quels éléments parmis Emprun, Mensualites ou Durée ont été modifiés en dernier et avant dernier

//Ecoute des 3 champs qui peuvent être modifiés
elementEmprun.addEventListener('input', function () { calculSimulateur('Emprun'), verification_valeur()});
elementDuree.addEventListener('input', function () { calculSimulateur('Duree'), verification_valeur()});
elementMensualites.addEventListener('input', function () { calculSimulateur('Mensualites'), verification_valeur()});

function verification_valeur(){
    if (elementDuree.value < 6 || elementDuree.value > 84){
        elementDuree.style.color = 'red'
    }
    else{
        elementDuree.style.color =  'black'
    }
    if (elementEmprun.value < 500 || elementEmprun.value > 75000){
        elementEmprun.style.color = 'red'
    }
    else{
        elementEmprun.style.color =  'black'
    }
    if (elementMensualites.value < 10 || elementMensualites.value > 12000){
        elementMensualites.style.color = 'red'
    }
    else{
        elementMensualites.style.color =  'black'
    }
}
function calculSimulateur(dernierModifier) {
    let oldIndex = null;
    //Netoyage de l'ancienne position du drenier champ modifié
    if ((oldIndex = ordreModification.indexOf(dernierModifier)) != -1) {
        ordreModification.splice(oldIndex, 1);
    }
    ordreModification.unshift(dernierModifier)
    if (ordreModification.length >= 2) {
        if (dernierModifier == 'Emprun') {
            if (ordreModification[1] == 'Mensualites') {
                document.getElementById('duree').value = Math.round(elementEmprun.value / elementMensualites.value)
            }
            else if (ordreModification[1] == 'Duree') {
                document.getElementById('mensualites').value = Math.round(elementEmprun.value / elementDuree.value)
            }
        }
        else if (dernierModifier == "Mensualites") {
            if (ordreModification[1] == 'Duree') {
                document.getElementById('emprun').value = Math.round(elementMensualites.value * elementDuree.value)
            }
            else if (ordreModification[1] == 'Emprun') {
                document.getElementById('duree').value = Math.round(elementEmprun.value / elementMensualites.value)
            }
        }
        else if (dernierModifier == "Duree") {
            if (ordreModification[1] == 'Mensualites') {
                document.getElementById('emprun').value = Math.round(elementDuree.value * elementMensualites.value)
            }
            else if (ordreModification[1] == 'Emprun') {
                document.getElementById('mensualites').value = Math.round(elementEmprun.value / elementDuree.value)
            }
        }
    }
}
// Script 2:
document.getElementById("btn-pret-personnel").onclick = function () {
    document.getElementById('simulateur').style.display = 'none';
    document.getElementById('simulateur-cliked').style.display = 'flex';
};
document.getElementById("btn-retour-simulateur").onclick = function () {
    document.getElementById('simulateur-cliked').style.display = 'none';
    document.getElementById('simulateur').style.display = 'flex';
};

// SLIDESHOW

let frameIndex = 0;
        showFrames(frameIndex);
        // Je fixe mon index pour rappeler mes frames et les manipuler à la façon d'un ARRAY

        function currentFrame(n) {
            showFrames(frameIndex = n);
        }
        // J'établis un parallèle entre l'index de ma classe currentFrame qui réagira onclick et ma future fonction qui gèrera mes frames

        function showFrames(n) {
            let i;
            let frames = document.getElementsByClassName("frame");
            let dots = document.getElementsByClassName("dot");           
            
            for (i = 0; i < frames.length; i++)
            {
                frames[i].style.display = "none";
            }
            //J'initialise mon index à 0, tant qu'il est inférieur à la longueur de mon tableau, j'applique la classe display ="none"
            for (i = 0; i < dots.length; i++)
            {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            //Pareil pour les dots, mais je retire la classe " active" définie en css (attention à l'espace)
            frames[frameIndex].style.display = "block";
            dots[frameIndex].className += " active";
            //J'indique que les frames indexées doivent passer en style "block"
            //Pareil pour le sélecteur, sauf que je rajoute la classe " active"
        }

        // END SLIDESHOW
        // MENU NAV
let mainMenu = document.getElementById("menu-slider")
        document.getElementById("menuburger").addEventListener("click", function(){
            if (mainMenu.style.display === "none"){
                mainMenu.style.display = "block";
            } else {
                mainMenu.style.display = "none";
            }
        });
        // END NAV
let frameIndexD = 0;
showFramesD(frameIndexD);

function currentFrameD(n) {
    showFramesD(frameIndexD = n);
}

function showFramesD(n) {
    let j;
    let framesD = document.getElementsByClassName("frame-decouverte");
    let dotsD = document.getElementsByClassName("buttom-article");

    for (j = 0; j < framesD.length; j++) {
        framesD[j].style.display = "none";
    }
    for (j = 0; j < dotsD.length; j++) {
        dotsD[j].className = dotsD[j].className.replace(" activeD", "");
    }
    framesD[frameIndexD].style.display = "block";
    dotsD[frameIndexD].className += " activeD";
}



let big = true;
if (window.innerWidth <= 1024){
    big = false;
    switchButtonPosition()
}
window.addEventListener('resize', function(){
    switchButtonPosition()
});

function switchButtonPosition(){

    let discoveryAll = document.getElementById('discovery-all');
    let listArticle = document.getElementById("list-article");
    let article1 = document.getElementById("article01");
    let article2 = document.getElementById("article02");
    let article3 = document.getElementById("article03");
    let article4 = document.getElementById("article04");

    if( window.innerWidth <= 1024){
        big = false
        discoveryAll.appendChild(listArticle);
        let enfants = discoveryAll.childNodes;
        enfants[9].after(enfants[5]);

        let enfantsArticle = listArticle.childNodes;
        enfantsArticle[1].appendChild(article1)
        enfantsArticle[3].appendChild(article2)
        enfantsArticle[5].appendChild(article3)
        enfantsArticle[7].appendChild(article4)
    }
    else if(!big){
        big = true
        console.log("lalalalallala")
        location.reload();
    }
}

