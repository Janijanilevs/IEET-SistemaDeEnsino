<?php

use IeetSite\Core\Router;

/* Index */
Router::add("/", "HomeController", "index");


/* Login */
Router::add("/login", "LoginController", "login");
Router::add("/cadastro", "LoginController", "cadastro");

/* Teste Banco de Dados */

Router::add("/vacao", "HomeController", "teste");

/* Páginas: */
Router::add("/direcaoMain", "HomeController", "mainDirecao");
Router::add("/alunoMain", "HomeController", "mainAluno");
Router::add("/confirmacao", "HomeController", "confirmacao");
Router::add("/alunoBoletim", "HomeController", "alunoBoletim");
