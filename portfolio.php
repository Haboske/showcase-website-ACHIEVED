<!DOCTYPE html>
<html lang="en">
    <head>
		<title>Portfolio du Développeur Web de Toulon</title>
        
		<link rel="stylesheet" href="css js/portfolio.css">
        <?php
            require "assets/head.php";
        ?>
        <script type="text/javascript" src="css js/portfolio.js"></script>
    </head>
    <body id="fornav_portfolio">
	<!-- Intégration du header dans la page -->
	<?php
		require 'assets/header.php';
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
                <a href="application-mobile-party" id="party">
                    <div></div>
                    <h4>Réalisation d'une maquette pour application mobile sur Adobe XD</h4>
                </a>
                <a href="site-portfolio" id="bd">
                    <div></div>
                    <h4>Création de mon site web portfolio from scratch et sans CMS</h4>
                </a>
                <a id="raceers">
                    <div></div>
                    <h4>Projet de Création d'une boutique en ligne codé main</h4>
                </a>
            </section>
        </article>
    </main>
    
	<!-- Intégration du footer dans la page -->
	<?php
		require 'assets/footer.php';
	?>
	<!-- Intégration du header dans la page -->
</body>
    <div class="pop_up" id="portfolio_block">
        <div>
            <h5>Désolé, cette page n'est pas encore disponible.</h5>
            <p>En effet plusieurs pages du site ne sont pas encore développées mais ça ne saurait tarder !</p>
            <ol>
                <li>Si il s'agit de la page "Raceers", il est question d'un gros projet en développement avec un énorme travail de Back-End qui prendra plusieurs années à développer. Sa présentation arrive dans quelques semaines, voyez ça comme un leak 😘.</li>
                <li>&Eacute;tant à la recherche d'un stage, j'ai dû accélérer le développement de mon site internet et donc appliquer des priorités.</li>
                <li>Je fais actuellement mes études pour devenir développeur et j'ai par conséquent très peu de temps à consacrer sur mes projets persos, leur développement est donc fortement ralentit.</li>
                <li>Mon portofolio est un projet de longue durée. Il se verra être le sujet de plusieurs versions avec des améliorations back-end à venir, et une optimisation du front-end actuel.</li>
                <li>De nouvelles pages arriveront bientôt avec de nouveaux projets à présenter (surtout en Backend) donc patience !</li>
            </ol>
            <button id="portfolio_block_close">J'ai compris ! 😃</button>
        </div>
    </div>
</html>