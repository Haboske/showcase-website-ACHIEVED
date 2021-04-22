
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
    })
});