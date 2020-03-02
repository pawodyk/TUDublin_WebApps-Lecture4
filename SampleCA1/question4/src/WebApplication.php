<?php

namespace Tudublin;

class WebApplication{

    public function run(){

        $page = filter_input(INPUT_GET, 'page');

        $mc = new MainController();

        switch ($page){
            case 'processData':
                $mc->processForm();
                break;
            default:
                $mc->index();
                break;
        }

    }

}