<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon href=" favicon.ico">
    <link rel="preload" href="/fonts/OpenSans-Bold.ttf" as="font" type="font/ttf" crossorigin />
    <link rel="preload" href="/fonts/ErasBoldITC.ttf" as="font" type="font/ttf" crossorigin />
    <link rel="preload" href="/fonts/OpenSans-SemiBold.ttf" as="font" type="font/ttf" crossorigin />
    <link rel="preload" href="/fonts/OpenSans-Light.ttf" as="font" type="font/ttf" crossorigin />
    <link rel="preload" href="/fonts/OpenSans-Regular.ttf" as="font" type="font/ttf" crossorigin />
    <title>Crédit Lédonien - Qui sommes-nous ?</title>
    <meta name="description"
        content="Essayez notre simulateur de crédit, nous avons vos solution de crédit et nous vous accompagnons vers une solution responsable.">
</head>

<body>
    <?php include("html/navbar.php")
    ?>
    <div id="container-fluid">
        <?php include("html/header.php")
        ?>

        <div class="who-banner">
            <p class="title-banner">Le crédit responsable par <br /> le Crédit Lédonien</p>
        </div>
        <section class="article-container">
            <div class="all-articles-qui">
                <article>
                    <!-- FIRST ARTICLE -->
                    <h2>Le crédit Lédonien plus responsables ensemble.</h2>
                    <p>Être <span class="mi-strong">responsable…</span>
                        …cela peut paraître évident pour le <strong>Crédit Lédonien</strong> qui prône le crédit
                        responsable depuis plus de <span class="mi-strong">20</span> ans.
                        Cette posture qui nous amène à évoluer constamment au gré des aspirations et modes de vie des
                        Français, a toujours été portée par des actes. </p>

                    <p>Elle revêt trois dimensions complémentaires. Tout d’abord, la <span
                            class="mi-strong">responsabilité</span> pour vous, en proposant des solutions de financement
                        et des services qui permettent une <span class="mi-strong">complète maîtrise de son crédit et de
                            son budget.</span>
                        Cette responsabilité s’exprime également pour nous, à travers une politique des ressources
                        humaines <span class="mi-strong">inclusive</span> et <span class="mi-strong">solidaire</span>,
                        favorisant <span class="mi-strong">l’épanouissement des collaborateurs.</span></p>
                    <p>Enfin, une responsabilité pour tous, car nous sommes tous concernés. Nos modules d’éducation
                        financière et notre présence dans le <span class="mi-strong">monde éducatif et
                            professionnel</span> sont les parfaits exemples de cet engagement.</p>

                    <p>Au service de nos clients, nous facilitons l’accès à une consommation plus responsable et plus
                        durable. Alors soyons toujours plus responsables, ensemble.</p>
                </article>
                <!-- SECOND ARTICLE -->
                <article>
                    <h2>Penser nos produits pour répondre aux vies d'aujourd'hui</h2>
                    <p>Parce que les modes de consommation sont en perpétuelle évolution, en tant qu’acteur responsable
                        nous nous engageons au quotidien dans la co-construction avec nos clients d’offres et de
                        services qui répondent aux vies d’aujourd’hui.
                    </p>
                </article>
                <!-- THIRD ARTICLE -->
                <article>
                    <h2>Faciliter la concrétisation de vos projets.</h2>
                    <p>Parce que se lancer dans de nouveaux projets suscite parfois de nombreuses interrogations, nous
                        vous accompagnons à chaque étape en développant des outils et des services qui faciliteront leur
                        réalisation.</p>
                </article>
                <!-- FOURTH ARTICLE -->
                <article>
                    <h2>Écouter, proposer, accompagner chacun d’entre vous.</h2>
                    <p>Parce que chaque besoin de financement est différent, Cetelem s’engage chaque jour à vous
                        accompagner afin de vous proposer une solution adaptée à votre situation.</p>
                    <div>
                        <img class="hexagon" src="images/hexagon.png" alt="">
                    </div>
                </article>
            </div>
            <div class="simulateur-qui-main">
                <?php include("html/simulateur.php")
                ?>
            </div>
        </section>

        <footer>
            <?php include("html/footer.php")
            ?>
        </footer>

    </div>
    <script src="js/script.js"></script>
    </section>
</body>

</html>