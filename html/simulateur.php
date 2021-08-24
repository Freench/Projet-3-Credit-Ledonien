    <!-- Simulateur -->
    <div id="simulateur">
        <h2>Simulateur de crédit en ligne</h2>
        <p>Quel type de crédit souhaitez-vous réaliser ?</p>

        <!-- Les 3 boutons -->
        <button id="btn-pret-personnel" class="btn-simulateur" type="button" value="clickme">
            <img src="image/carte-de-credit-simple.svg" alt="logo carte bancaire" class="logo-simulateur">
            <div class="contenu-btn-simulateur">
                <h3>Prêt Personnel</h3>
                <p class="sous-titre">Un crédit à partir de 5 000 €</p>
            </div>
            <img src="image/next.svg" alt="logo flèche droite" class="logo-next btn-simulateur-fleche">
        </button>
        <button class="btn-simulateur">
            <img src="image/carte-de-credit-fleches.svg" alt="logo carte bancaire" class="logo-simulateur">
            <div class="contenu-btn-simulateur">
                <h3>Crédit renouvelable</h3>
                <p class="sous-titre">Un crédit jusqu'à 3 000 €</p>
            </div>
            <img src="image/next.svg" alt="logo flèche droite" class="logo-next btn-simulateur-fleche">
        </button>
        <button class="btn-simulateur">
            <img src="image/carte-de-credit-doubles.svg" alt="logo carte bancaire" class="logo-simulateur">
            <div class="contenu-btn-simulateur">
                <h3>Rachat de crédit</h3>
                <p class="sous-titre">Regroupez tous vos crédits en un seul</p>
            </div>
            <img src="image/next.svg" alt="logo flèche droite" class="logo-next btn-simulateur-fleche">
        </button>
        <!-- Fin les 3 boutons -->
    </div>
    <!-- Fin simulateur -->
    <!-- Simulateur cliked -->
    <div id="simulateur-cliked">

        <h2>Prêt Personnel</h2>
        <div class="emprun">
            <p class="label-simulateur">Montant à emprunter</p>
            <input type="number" id="emprun" name="emprun">
            <p class="consigne">Choisissez un montant entre 500 et 75 000 €</p>
        </div>
        <div class="mensualites-et-duree">
            <div class="mensualites-ou-duree mr5">
                <p >Mensualités</p>
                <input type="number" id="mensualites">
                <p class="consigne" >De 10 à 12 000 €</p>
            </div>
            <div class="mensualites-ou-duree">
                <p>Ou durée</p>
                <input type="number" id="duree">
                <p class="consigne">De 6 à 84 mois</p>
            </div>
        </div>

        <button id="btn-retour-simulateur" class="" type="button" value="clickme">Retour</button>
    </div>
