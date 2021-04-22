<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="css js/bdwd.css">
    <?php 
        require 'assets/head.php';
    ?>
</head>
<body>
    <?php
        require 'assets/header.php';
    ?>
    <main>
        <section id="banner">
            <h2>Parce que un beau portfolio c'est une oeuvre bien préparé, organisé.</h2>
            <img src="css js/media/bdwd.png" alt="démonstration du site web sur un ordinateur">
        </section>
        <article id="article1">
            <h2>Maquettage, intégration et mise en production d’un portfolio en ligne.</h2>
            <h3>Production de mon site web portfolio à l’aide de plusieurs outils :</h3>
        </article>
        <article id="tools">
            <div id="cadre">
                <div class="cat" id="graphism">
                    <h3>Graphisme</h3>
                    <div class="cat_child">
                        <h4>Figma</h4>
                        <img src="css js/svgconception/figma.svg" alt="logo figma">
                        <p>Conception et prototypage du site web</p>
                    </div>
                    <div class="cat_child">
                        <h4>Adobe Illustrator</h4>
                        <img src="css js/svgconception/ai.svg" alt="logo adobe illustrator">
                        <p>Conception du logo, choix des couleurs, export en svg..</p>
                    </div>
                    <div class="cat_child">
                        <h4>Adobe Photoshop</h4>
                        <img src="css js/svgconception/ps.svg" alt="logo adobe photoshop">
                        <p>Retouche, recadrage, et optimisation de la taille des images</p>
                    </div>
                </div>
                <div class="cat" id="dev">
                    <h3>Développement</h3>
                    <div class="cat_child">
                        <h4>Visual Studio Code</h4>
                        <img src="css js/svgconception/vscode.svg" alt="logo visual studio code">
                        <p>&eacute;diteur de code utilisé avec ses extensions pour la réalisation du site web à l'aide de ces 3 langages :</p>
                    </div>
                    <div class="tycoon">
                        <img src="css js/svgconception/php.svg" class="tycoon" alt="logo langage php">
                        <img src="css js/svgconception/css3.svg" class="tycoon" alt="logo langage css3">
                        <img src="css js/svgconception/js.svg" class="tycoon" alt="logo langage js">
                    </div>
                </div>
                <div class="cat" id="prod">
                    <h3>Production</h3>
                    <div class="cat_child">
                        <h4>GitHub Desktop</h4>
                        <img src="css js/svgconception/github.svg" alt="logo github desktop">
                        <p>Versionning, suivi, et sauvegarde de la progression du site web</p>
                    </div>
                    <div class="cat_child">
                        <h4>Laragon</h4>
                        <img src="css js/svgconception/laragon.svg" alt="logo laragon">
                        <p>Mise en production du site web sur un serveur local (appache) pour assurer son bon fonctionnement</p>
                    </div>
                </div>
                <div class="cat" id="colors">
                    <h3>Couleurs</h3>
                    <div class="cat_child">
                        <h4>Primaire</h4>
                        <div class="color">
                            <img src="css js/svgconception/primary.svg" alt="coup de pinceau violet">
                            <p>#7F3996</p>
                        </div>
                        <p>Reflet de la qualité et de la créativité. Deux compétences convoités dans le développement web.</p>
                    </div>
                    <div class="cat_child">
                        <h4>Secondaire</h4>
                        <div class="color">
                            <img src="css js/svgconception/secondary.svg" alt="coup de pinceau gris">
                            <p>#424242</p>
                        </div>
                        <p>Symbole du calme, de la sécurité et de l’austérité. Des qualités humbles, mais redoutablement solides.</p>
                    </div>
                </div>
                <div class="cat" id="polices">
                    <h3>Polices</h3>
                    <div id="tdiv">
                        <p id="tbold">Titillium Web</p>
                        <p id="tsemibold">Titillium Web</p>
                        <p id="treg">Titillium Web</p>
                        <p id="tlight">Titillium Web</p>
                    </div>
                    <div id="mdiv">
                        <p id="mbold">MontSerrat</p>
                        <p id="mreg">MontSerrat</p>
                        <p id="mlight">MontSerrat</p>
                    </div>
                </div>
            </div>
        </article>
    </main>
    <?php
        require 'assets/footer.php';
    ?>
</body>
</html>