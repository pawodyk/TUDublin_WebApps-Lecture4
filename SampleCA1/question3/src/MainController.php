<?php

namespace Tudublin;

class MainController {

    const TEMPLATES_PATH = __DIR__ . '/../templates';
    private $twig;

    public function __construct(){
        $loader =  new \Twig\Loader\FilesystemLoader(self::TEMPLATES_PATH);
        $this->twig = new \Twig\Environment($loader);
    }

    private function renderPage($name, $args){
        $template = $this->twig->render($name, $args);
        print($template);
    }

    public function homepage(){
        $template = 'home.html.twig';
        $args = ['pageTitle'=> 'Home Page'];
        $this->renderPage($template,$args);
    }

    public function about(){
        $template = 'about.html.twig';
        $args = ['pageTitle'=>"About Page"];
        $this->renderPage($template,$args);
    }

    public function contact(){
        $template = 'contact.html.twig';
        $args = ['pageTitle'=>"Contact Information"];
        $this->renderPage($template,$args);
    }


}