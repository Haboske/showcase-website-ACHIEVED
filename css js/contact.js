
$(document).ready(function(){

    // Initialisation du script
    console.log("//// contact.js bien chargé");

    // Début des vérifications
    $("#contact_name").keyup(function(){
        var chaine=$("#contact_name").val();
        var regex=/^[a-zA-Z]+[a-zA-Z-' ]+$/g;
        var resultat=regex.test(chaine);
        if(resultat){
            $("#contact_name").css({"background-color":"rgba(45, 175, 33, 0.3)"});
        }else if(chaine===''){
            $("#contact_name").css({"background-color":"transparent"});
        }else{
            $("#contact_name").css({"background-color":"rgba(192, 41, 41, 0.3)"});
        }
    });
    $("#contact_email").keyup(function(){
        var chaine=$("#contact_email").val();
        var regex=/^[a-zA-Z-.]+[@]{1}[a-z-]{2,}[.]{1}[a-z]{2,}$/g;
        var resultat=regex.test(chaine);
        if(resultat){
            $("#contact_email").css({"background-color":"rgba(45, 175, 33, 0.3)"});
        }else{
            $("#contact_email").css({"background-color":"rgba(192, 41, 41, 0.3)"});
        }
    });
    $("#contact_phone").keyup(function(){
        var chaine=$("#contact_phone").val();
        var regex=/^[0]{1}[1-9]{1}([-. ]?[0-9]{2}){4}$/g;
        var resultat=regex.test(chaine);
        if(resultat){
            $("#contact_phone").css({"background-color":"rgba(45, 175, 33, 0.3)"});
        }else if(!resultat&&(chaine.length)>=10){
            $("#contact_phone").css({"background-color":"rgba(192, 41, 41, 0.3)"});
        }else{
            $("#contact_phone").css({"background-color":"transparent"});
        }
    });
    $("#contact_form").submit(function(e){
        // e.preventDefault(e);
        var chaine_Email=$("#contact_email").val();
        var regex_Email=/^[a-zA-Z-.]+[@]{1}[a-z-]{2,}[.]{1}[a-z]{2,}$/g;
        var resultat_Email=regex_Email.test(chaine_Email);
        var chaine_Name=$("#contact_name").val();
        var regex_Name=/^[a-zA-Z]+[a-zA-Z-' ]+$/g;
        var resultat_Name=regex_Name.test(chaine_Name);
        var chaine_Phone=$("#contact_phone").val();
        var regex_Phone=/^[0]{1}[1-9]{1}([-. ]?[0-9]{2}){4}$/g;
        var resultat_Phone=regex_Phone.test(chaine_Phone);
        if(!resultat_Name){
            e.preventDefault(e);
            $("#contact_name_error").show();
        }
        if(!resultat_Email){
            e.preventDefault(e);
            $("#contact_email_error").show();
        }
        if(!resultat_Phone){
            e.preventDefault(e);
            $("#contact_phone_error").show();
        }
        // if(($("#contact_message").val())===''){
        //     console
        //     e.preventDefault(e);
        //     $("#contact_message").html('Je dois saisir au moins 1 caractère !');
        // }
    });
});