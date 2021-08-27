<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preload" as="image" href="images/money-2724235_1920.jpg" />
    <link rel="preload" href="/fonts/OpenSans-Bold.ttf" as="font" type="font/ttf" crossorigin />
    <link rel="preload" href="/fonts/ErasBoldITC.ttf" as="font" type="font/ttf" crossorigin />
    <link rel="preload" href="/fonts/OpenSans-SemiBold.ttf" as="font" type="font/ttf" crossorigin />
    <link rel="preload" href="/fonts/OpenSans-Light.ttf" as="font" type="font/ttf" crossorigin />
    <link rel="preload" href="/fonts/OpenSans-Regular.ttf" as="font" type="font/ttf" crossorigin />
    <link rel="shortcut icon href="favicon.ico">
    <title>Crédit Lédonien - Le crédit responsable</title>
    <meta name="description"
        content="Essayez notre simulateur de crédit, nous avons vos solution de crédit et nous vous accompagnons vers une solution responsable.">
</head>


<body>
<?php include('html/navbar.php')
        ?>
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
            <div class="photo-main-responsive">
                <img src="images/money-2724235_1920.jpg" alt="la photo des arbres qui sortent de l'argent parce que le capitalisme c'est bon pour l'environnement">
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
    </div>
    
    <script type="text/javascript" src="js/script.js"></script>
</body>
</html>