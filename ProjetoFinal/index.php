<?php
declare(strict_types=1);

use IeetSite\Core\Router;
require __DIR__ . "/vendor/autoload.php";
const PASTA_VIEW = "./app/View/";
const NS_CONTROLLER = "\\IeetSite\\Controller\\"; // Namespace

$url = $_GET["url"] ?? "";

Router::add("/", "HomeController", "index");
Router::add("/login", "LoginController", "login");
Router::add("/cadastro", "LoginController", "cadastro");
Router::add("__erro", "ErroController", "erro404");

Router::exec($url);