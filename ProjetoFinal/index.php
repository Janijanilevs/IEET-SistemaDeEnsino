<?php
declare(strict_types=1);

use IeetSite\Core\Router;

require __DIR__ . "/vendor/autoload.php";
require __DIR__ . "/app/config.php";
require __DIR__ . "/app/rotas.php";

$url = $_GET["url"] ?? "";

Router::exec($url);