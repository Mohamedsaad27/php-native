<?php 

function GetRequestMethod(){
    return $_SERVER['REQUEST_METHOD'];
}


function PostMethod(){
    if (GetRequestMethod() == "POST"){
        return true;
    }else{
        return false;
    }
}

function Redirect($path){
    header("Location:$path");
    die;
}

