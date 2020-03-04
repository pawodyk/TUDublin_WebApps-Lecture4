<?php


$validForm = true;
$errorList = [];

$name = filter_input(INPUT_POST, 'name');
$age = filter_input(INPUT_POST, 'age');
$isLecturer = filter_has_var(INPUT_POST, 'isLecturer');

$userType = '(not known)';

if (empty($name)){
    $validForm = false;
    $errorList[] = "name field is missing";
}
if (empty($age)){
    $validForm = false;
    $errorList[] = "age field is missing";
} elseif (!is_numeric($age)){
    $validForm = false;
    $errorList[] = "age is not a number";
}
if ($validForm){
    if ($isLecturer) {
        $userType = "lecturer";
    }
    require_once __DIR__ . '/../templates/confirm.php';
} else {
    require_once __DIR__ . '/../templates/formError.php';
}