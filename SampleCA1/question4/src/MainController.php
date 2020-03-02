<?php

namespace Tudublin;

class MainController {
    public function index(){
        require_once __DIR__ . '/../templates/mainForm.php';
    }

    public function processForm(){
        $isValidated = true;
        $errorList = [];

        $userName = filter_input(INPUT_POST, 'name');
        $userAge = filter_input(INPUT_POST, 'age');
        $isLect = filter_input(INPUT_POST, 'isLecturer');

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
            require_once __DIR__ . '/../templates/formConfirm.php';
        } else {
            require_once __DIR__ . '/../templates/formError.php';
        }
    }
}