<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Crédit Lédonien - Le crédit responsable</title>
    <meta name="description"
        content="Essayez notre simulateur de crédit, nous avons vos solution de crédit et nous vous accompagnons vers une solution responsable.">
</head>


<body>
    <div id="menu-slider" class="slidemenu" style="display:none;">
        <div id="paddingmenu">
            <a href="#" class="menuTitle">ACCUEIL</a>
            <a href="#" class="menuTitle">QUI SOMMES-NOUS?</a>
            <a href="#" class="menuTitle">NOS OFFRES</a>
            <a href="#" class="menuTitle">CONTACTEZ-NOUS</a>
        </div>
    </div>
    <div class="sur-flex">
        <div class="flex">
            <div class="header-main">
                <?php include('html/header.php')
                ?>
            </div>
            <div class="pret-main">
                <?php include('html/slideshow.php')
                ?>
            </div>
            <div class="simulateur-main">
                <?php include('html/simulateur.php')
                ?>
            </div>
            <div class="article1-main">
                <?php include('html/article1.php')
                ?>
            </div>
            <div class="decouverte-main">
                <?php include('html/decouverte.php')
                ?>
            </div>
            <div class="photo-main">
                <img src="images/money-arbre.png" alt="la photo des arbres qui sortent de l'argent parce que le capitalisme c'est bon pour l'environnement">
            </div>
            <div class="article2-main">
                <?php include('html/article2.php')
                ?>
            </div>
            <div class="footer-main">
                <?php include('html/footer.php')
                ?>
            </div>
        </div>
        <div class="nav-main">
            <?php include('html/navbar.php')
            ?>
        </div>
    </div>
    <script type="text/javascript" src="js/script.js"></script>
</body>

</html>