<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="css js/party.css">
    <link rel="stylesheet" href="assets/FRONT.Carousel.Auto/FRONT.Carousel.Auto.css">
    <?php
        include 'assets/head.php'
    ?>
</head>
<body>
    <?php
        include 'assets/header.php'
    ?>
    <main>
        <section id="banner">
            <img src="css js/media/testpng.png">
            <div>
                <img src="css js/media/partyhover.svg">
                <h2>L'application mobile qui te permet de cr&eacute;er et d'organiser des &eacute;venements 🥳<br>Qu'ils soient ouvert au public ou restreint &agrave; ton cercle priv&eacute; 🔒</h2>
            </div>
        </section>
        <article id="article1">
            <h2>Maquettage d'une application mobile factice</h2>
            <h3>Entrainement pour Titre Professionnel à l'aide de deux outils :</h3>
            <div>
                <div>
                    <h4>Adobe XD</h4>
                    <img src="css js/svgconception/xd.svg">
                    <p>Conception et prototypage du concept de l'application mobile</p>
                </div>
                <div>
                    <h4>Adobe Illustrator</h4>
                    <img src="css js/svgconception/ai.svg">
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
            <p>Pour en connaître plus concernant la r&eacute;alisation de cette maquette <a href="#">c'est par ici</a> que ça se passe</a></p>
        </article>
    </main>
    <?php
        include 'assets/footer.php'
    ?>
</body>
</html>