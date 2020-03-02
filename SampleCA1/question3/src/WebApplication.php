<?php

namespace Tudublin;

class WebApplication{

    public function run(){

        $action = filter_input(INPUT_GET, 'action');

        $mc = new MainController();

        switch ($action){
            case 'about':
                $mc->about();
                break;
            case 'contact':
                $mc->contact();
                break;
            default:
                $mc->homepage();
                break;
        }

    }

}