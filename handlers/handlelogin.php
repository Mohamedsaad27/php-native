<?PHP
session_start();
include '../core/functions.php';
include '../core/validations.php';

$loginerrors = [];

if(PostMethod()){


    foreach($_POST as $key => $value){
        $$key = SanitizeInput($value);
    }
    //validate email
    if(RequiredInput($email)){
        $loginerrors[] = "E-mail Is Required";
    }
    elseif(FilterEmail($email)){
        $loginerrors[] = "Please Type Valid E-mail";
    }

    //validate password    

    if(RequiredInput($password)){
        $loginerrors[] = "Password Is Required";
    }
    elseif(MinValue($password,6)){
        $loginerrors[] = "Name Must Be Greater Than 6 Letters";
    }
    elseif(MaxValue($password,20)){
        $loginerrors[] = "Name Must Be Less Than 20 Letters";
    }

    if(RequiredInput($loginerrors)){
        $filename = "../data/data.csv"; // Replace with your file name
        $file = fopen($filename, "r");
        $data_user = [];

 //Loop through each row of the CSV file
 while (($row = fgetcsv($file)) !== false) {
 //Add the row to the array;
    //  $data_user[] = $row;
    $data = explode(",", $line);
     if ($data[0] === $email && $data[1] === sha1($password)) {
       echo "Login successuflly";
 }
 //Close the file
 fclose($file);

        Redirect("../profile.php");
    }
}else{
    $_SESSION['loginerrors'] = $loginerrors;
    Redirect("../login.php");
}



}