
// Le script à pour but d'effectuer les calculs du simulateurs la difficulté est de détecter les deux derniers champs qui ont été modifiés et de calculer le 3ème
//Initialisation variables
let elementEmprun = document.getElementById('emprun');
let elementMensualites = document.getElementById('mensualites');
let elementDuree = document.getElementById('duree');
let ordreModification = []  // Sert savoir quels éléments parmis Emprun, Mensualites ou Durée ont été modifiés en dernier et avant dernier

//Ecoute des 3 champs qui peuvent être modifiés
elementEmprun.addEventListener('input', function () { calculSimulateur('Emprun') });
elementDuree.addEventListener('input', function () { calculSimulateur('Duree') });
elementMensualites.addEventListener('input', function () { calculSimulateur('Mensualites') });


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