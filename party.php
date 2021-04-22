<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="css js/party.css">
    <link rel="stylesheet" href="assets/FRONT.Carousel.Auto/FRONT.Carousel.Auto.css">
    <link rel="canonical" href="application-mobile-party" />
    <?php
        require 'assets/head.php'
    ?>
</head>
<body>
    <?php
        require 'assets/header.php'
    ?>
    <main>
        <section id="banner">
            <img src="css js/media/testpng.png">
            <div>
                <img src="css js/media/partyhover.svg" alt="démonstration de l'application sur un téléphone">
                <h2>L'application mobile qui te permet de cr&eacute;er et d'organiser des &eacute;venements 🥳<br>Qu'ils soient ouverts au public ou restreints &agrave; ton cercle priv&eacute; 🔒</h2>
            </div>
        </section>
        <article id="article1">
            <h2>Maquettage d'une application mobile factice</h2>
            <h3>Entrainement pour Titre Professionnel à l'aide de deux outils :</h3>
            <div>
                <div>
                    <h4>Adobe XD</h4>
                    <img src="css js/svgconception/xd.svg" alt="logo adobe xd">
                    <p>Conception et prototypage de l'application mobile</p>
                </div>
                <div>
                    <h4>Adobe Illustrator</h4>
                    <img src="css js/svgconception/ai.svg" alt="logo adobe illustrator">
                    <p>Conception du logo, choix des couleurs, export en sgv...</p>
                </div>
            </div>
        </article>
        <article id="article2">
            <?php
                include "assets/FRONT.Carousel.auto/FRONT.Carousel.Auto.php"
            ?>
        </article>
        <article id="formlink">
            <p>Pour en connaître plus concernant la r&eacute;alisation de cette maquette <a href="formulaire-de-contact">c'est par ici</a> que ça se passe</a></p>
        </article>
    </main>
    <?php
        require 'assets/footer.php'
    ?>
</body>
</html>