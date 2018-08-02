<?php

require 'Controllers/cardController.php';
define('CLASSES', __DIR__ . '/Classes/');

require 'Loader.php';
Loader::init();

$request_uri = explode('?', $_SERVER['REQUEST_URI'], 2);

switch ($request_uri[0]) {
    case '/':
        require 'Views/home.php';
        break;
    case '/oop1':
        require 'Views/oop_module_1.php';
        break;
    case '/cards':
        require 'Views/oop_cards.php';
        $controller = new CardController();
        $controller->init();
        break;
    default:
        require 'Views/404.php';
        break;
}