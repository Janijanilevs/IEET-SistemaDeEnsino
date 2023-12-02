<?php
declare(strict_types=1);

use IeetSite\Controller\HomeController;
use IeetSite\Controller\ErroController;
use IeetSite\Controller\LoginController;

require __DIR__ . "/vendor/autoload.php";
const PASTA_VIEW = "./app/View/";


$url = $_GET["url"] ?? "/";


switch($url){
    case "/":
            $controller = new HomeController();
            $controller->index();
        break;
    case "login":
            $controller = new LoginController();
            $controller->login();
        break;
    case "cadastro":
            $controller = new LoginController();
            $controller->cadastro();
        break;
    default:
            $controller = new ErroController();
            $controller->erro404();
        break;
}