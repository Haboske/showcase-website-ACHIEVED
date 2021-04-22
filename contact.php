<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php 
        require 'assets/head.php';
    ?>
    <link rel="stylesheet" href="css js/contact.css">
    <link rel="canonical" href="https://bryandelaitre.com/formulaire-de-contact" />
    <script type="text/javascript" src="css js/contact.js"></script>
    <title>Document</title>
    <script></script>
</head>
<body>
    <?php require 'assets/header.php'; ?>
    <main>
        <div id="contact-title">
            <h1>Contactez-moi</h1>
            <h3>(N'hésitez pas à me contacter également via linkedin)</h3>
        </div>
        <div id="contact-div">
            <?php 
                require "php/envoi.php";
            ?>
            <form id="contact_form" method="post">
                <h2>formulaire</h2>

                <h3>informations</h3>
                <div>
                    <!-- <label for="userName">Nom</label> -->
                    <input type="text" name="contact_name" placeholder="Nom Prénom" id="contact_name">
                    <p class="error_message" id="contact_name_error">ex : (Jean Dupont)</p>
                </div>
                <div>
                    <!-- <label for="email">Email</label> -->
                    <input type="mail" name="contact_email" placeholder="Email" id="contact_email">
                    <p class="error_message" id="contact_email_error">ex : (monprenom.monnom@monemail.com)</p>
                </div>
                <div>  
                    <!-- <label for="contact-phone">T&eacute;l&eacute;phone</label> -->
                    <input type="tel" name="contact_phone" placeholder="Numéro de téléphone" id="contact_phone">
                    <p class="error_message" id="contact_phone_error">ex : (06 12 34 56 78 ou 0612345678)</p>
                </div>

                <h3></h3>

                <h3>message</h3>
                <div id="contact-message">
                    <!-- <label for="contact-message">Message</label> -->
                    <input type="textarea" name="contact_message" placeholder="Message">
                </div>
                <div id="contact-submit-div">
                    <input type="submit" name="contact_submit">
                </div>
            </form>
        </div>
    </main>
    <?php require 'assets/footer.php'; ?>
</body>
</html>