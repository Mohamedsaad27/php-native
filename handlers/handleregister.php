<?php
session_start(); 
include '../core/functions.php';
include '../core/Validations.php';

    $errors = []; 
    if(PostMethod()){

    foreach($_POST as $key => $value){
        $$key = SanitizeInput($value);
    }
    //validate name
    if(RequiredInput($name)){
        $errors[] = "Name Is Required";
    }
    elseif(MinValue($name,3)){
        $errors[] = "Name Must Be Greater Than 3 Letters";
    }
    elseif(MaxValue($name,20)){
        $errors[] = "Name Must Be Less Than 20 Letters";
    }

    //validate email
    if(RequiredInput($email)){
        $errors[] = "E-mail Is Required";
    }
    elseif(FilterEmail($email)){
        $errors[] = "Please Type Valid E-mail";
    }

    //validate password    

    if(RequiredInput($password)){
        $errors[] = "Password Is Required";
    }
    elseif(MinValue($password,6)){
        $errors[] = "Name Must Be Greater Than 6 Letters";
    }
    elseif(MaxValue($password,20)){
        $errors[] = "Name Must Be Less Than 20 Letters";
    }

    if(RequiredInput($errors)){
        $users_file = fopen("../data/data.csv","a+");
        $data = [$name,$email,sha1($password)];
        fputcsv($users_file,$data);
        //redirection 
        $_SESSION['auth'] = [$name,$email];
        Redirect("../index.php");
    }else{
        $_SESSION['errors'] = $errors;
        //redirection 
        Redirect("../register.php");
    }
}