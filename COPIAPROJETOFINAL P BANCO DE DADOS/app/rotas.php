<?php

use IeetSite\Core\Router;

Router::add("/", "HomeController", "index");
Router::add("/login", "LoginController", "login");

Router::add("/testeErro", "LoginController", "testeErro");





Router::add("/direcaoMain", "HomeController", "mainDirecao");
Router::add("/alunoMain", "HomeController", "mainAluno");
Router::add("/confirmacao", "HomeController", "confirmacao");

Router::add("/cadastro", "LoginController", "cadastro");