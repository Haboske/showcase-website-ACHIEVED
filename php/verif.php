<?php
    function mailVerification($themail){
        $pattern="(@{1})";
        if(preg_match($pattern,$themail)){
            return true;
        }else{
            return false;
        }
    }
    function phoneVerification($phone){
        $regex="#^[0]+[6-7]+([-. ]?[0-9]{2}){4}$#";
        if(preg_match($regex,$phone)){
            return true;
        }else{
            return false;
        }
    }
    function zipVerification($zip){
        $tab=str_split($zip);
        $longueur=count($tab);
        if($longueur===5){
            return true;
        }else{
            return false;
        }
    }
    function nameVerification($var){
        $regex="#^[a-zA-Z' ]{1,}$#";
        if(preg_match($regex,$var)){
            return true;
        }else{
            return false;
        }
    }
    function adresseVerification($var){
        $regex="#^[0-9a-zA-Z ]{1,}$#";
        if(preg_match($regex,$var)){
            return true;
        }else{
            return false;
        }
    }
?>