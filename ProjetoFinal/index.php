<?php
declare(strict_types=1);

use IeetSite\Core\Router;

require __DIR__ . "/app/View/componentes/topo.view.php"; #Teste de  topo

require __DIR__ . "/app/View/inicial.view.php"; # Teste de inicial

require __DIR__ . "/app/View/componentes/rodape.view.php"; #Teste de rodapé 

die;

require __DIR__ . "/vendor/autoload.php";
require __DIR__ . "/app/config.php";
require __DIR__ . "/app/rotas.php";

$url = $_GET["url"] ?? "";

Router::exec($url);

