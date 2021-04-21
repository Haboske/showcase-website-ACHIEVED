<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="css js/bdwd.css">
    <?php 
        include 'assets/head.php';
    ?>
</head>
<body>
    <?php
        include 'assets/header.php';
    ?>
    <main>
        <section id="banner">
            <h2>Parce que un beau portfolio c'est une oeuvre bien préparé, organisé.</h2>
            <img src="css js/media/bdwd.png">
        </section>
        <article id="article1">
            <h2>Maquettage, intégration et mise en production d’un portfolio en ligne.</h2>
            <h3>Production de mon site web portfolio à l’aide de plusieurs outils :</h3>
        </article>
        <article id="tools">
            <div id="cadre">
                <div class="cat" id="graphism">
                    <h3>Graphisme</h3>
                    <div>
                        <h4>Figma</h4>
                        <img src="css js/svgconception/figma.svg">
                        <p>Conception et prototypage du site web</p>
                    </div>
                    <div>
                        <h4>Adobe Illustrator</h4>
                        <img src="css js/svgconception/ai.svg">
                        <p>Conception du logo, choix des couleurs, export en svg..</p>
                    </div>
                    <div>
                        <h4>Adobe Photoshop</h4>
                        <img src="css js/svgconception/ps.svg">
                        <p>Retouche, recadrage, et optimisation de la taille des images</p>
                    </div>
                </div>
                <div class="cat" id="dev">
                    <h3>Développement</h3>
                    <div>
                        <h4>Visual Studio Code</h4>
                        <img src="css js/svgconception/vscode.svg">
                        <p>&eacute;diteur de code utilisé avec ses extensions pour la réalisation du site web à l'aide de ces 3 langages :</p>
                    </div>
                    <div class="tycoon">
                        <img src="css js/svgconception/php.svg" class="tycoon">
                        <img src="css js/svgconception/css3.svg" class="tycoon">
                        <img src="css js/svgconception/js.svg" class="tycoon">
                    </div>
                </div>
                <div class="cat" id="prod">
                    <h3>Production</h3>
                    <div>
                        <h4>GitHub Desktop</h4>
                        <img src="css js/svgconception/github.svg">
                        <p>Versionning, suivi, et sauvegarde de la progression du site web</p>
                    </div>
                    <div>
                        <h4>Laragon</h4>
                        <img src="css js/svgconception/laragon.svg">
                        <p>Mise en production du site web sur un serveur local (appache) pour assurer son bon fonctionnement</p>
                    </div>
                </div>
                <div class="cat" id="colors">
                    <h3>Couleurs</h3>
                    <div>
                        <h4>Primaire</h4>
                        <div class="color">
                            <img src="css js/svgconception/primary.svg">
                            <p>#7F3996</p>
                        </div>
                        <p>Reflet de la qualité et de la créativité. Deux compétences convoités dans le développement web.</p>
                    </div>
                    <div>
                        <h4>Secondaire</h4>
                        <div class="color">
                            <img src="css js/svgconception/secondary.svg">
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
        include 'assets/footer.php';
    ?>
</body>
</html>