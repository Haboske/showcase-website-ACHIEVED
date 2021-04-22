<?php
    require "verif.php";

    if(isset($_POST["contact_name"])&&isset($_POST["contact_email"])&&isset($_POST["contact_phone"])&&isset($_POST["contact_message"])){
        $contact_Name=htmlspecialchars($_POST["contact_name"]);
        $contact_Mail=htmlspecialchars($_POST["contact_email"]);
        $contact_Tel=htmlspecialchars($_POST["contact_phone"]);
        $contact_MSG=htmlspecialchars($_POST["contact_message"]);
    
        if(mailVerification($contact_Mail)&&phoneVerification($contact_Tel)&&nameVerification($contact_Name)){
            $message=$contact_MSG;
            mail("bryan.delaitre.study@gmail.com","salut test", $message);
        }else{
            echo("<h1>ça MARCHE PAS</h1>");
        }    
    }
    
?>