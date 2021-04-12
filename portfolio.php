<!DOCTYPE html>
<html lang="en">
    <head>
		<title>Portfolio du Développeur Web de Toulon</title>
		<link rel="stylesheet" href="../css js/portfolio.css">
		<link rel="stylesheet" href="..css js/mobileportoflio.css" media="all and (max-width:1000px)">
        <?php
            include "assets/head.php";
        ?>
    </head>
<body>
	<!-- Intégration du header dans la page -->
	<?php
		include 'assets/header.php';
	?>
	<!-- Fin de l'intégration du header dans la page -->	
    <main>
        <section>
            <h1>Découvrez mon portfolio</h1>
            <a href="#party"></a>
        </section>
        <article>
            <div id="h2">
                <img src="css js/svgconception/design.svg">
                <h2>Développement web et maquettage</h2>
            </div>
            <section>
                <a href="party.php" id="party">
                    <div></div>
                    <h4>Réalisation d'une maquette pour application mobile sur Adobe XD</h4>
                </a>
                <a href="bdwd.php" id="bd">
                    <div></div>
                    <h4>Création de mon site web portfolio from scratch entièrement codé main sans framework</h4>
                </a>
                <a href="#" id="raceers">
                    <div></div>
                    <h4>Projet de Création d'une boutique en ligne codé main</h4>
                </a>
            </section>
        </article>
    </main>
	<!-- Intégration du footer dans la page -->
	<?php
		include 'assets/footer.php';
	?>
	<!-- Intégration du header dans la page -->
</body>
</html>