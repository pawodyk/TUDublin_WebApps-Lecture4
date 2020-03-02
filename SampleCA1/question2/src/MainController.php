<?php

namespace Tudublin;

class MainController {
    function homepage(){
        require_once __DIR__ . '/../templates/home.php';
    }

    function about(){
        require_once __DIR__ . '/../templates/about.php';
    }
}