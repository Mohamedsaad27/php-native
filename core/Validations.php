<?php




function SanitizeInput($value){
    return trim(htmlspecialchars(htmlentities($value)));
}

function MinValue($value,$length){
    if(strlen($value) < $length){
     return true;
    }else{
        return false;
    }
}


function MaxValue($input,$length){
    if(strlen($input) > $length){
        return true;
    }else{
        return false;
    }
}


function RequiredInput($input){
    if(empty($input)){
        return true;
    }else{
        return false;
    }
}


function FilterEmail($email){
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        return true;
    }else{
        return false;
    }
}