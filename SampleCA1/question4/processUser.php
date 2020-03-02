<?php

namespace Tudublin;

$isValidated = true;
$output = '';
$errorList = [];

$userName = filter_input(INPUT_GET, 'name');
$userAge = filter_input(INPUT_GET, 'age');
$isLect = filter_input(INPUT_GET, 'isLecturer');

if (empty($userName)){
    $isValidated = false;
    $errorList[] = "name field is missing";
}
if (empty($userAge)){
    $isValidated = false;
    $errorList[] = "age field is missing";
} elseif (!is_numeric($userAge)){
    $isValidated = false;
    $errorList[] = "age is not a number";
}

if ($isValidated){
    $output = 'Data Recived:<br><br>';


    $output .= "Name: $userName <br>";
    $output .= "Age: $userAge <br>";
    if (is_null($isLect)){
        $output .= "User Type: (not known)";
    } else {
        $output .= "User Type: lecturer";
    }
} else {
    $output = 'Data received - errors<br><br>';
    foreach ($errorList as $err){
        $output .= " - $err <br>";
    }
}




print $output;




