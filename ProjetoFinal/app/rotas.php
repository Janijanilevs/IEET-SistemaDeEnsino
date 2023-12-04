<?php

use IeetSite\Core\Router;

Router::add("/", "HomeController", "index");
Router::add("/login", "LoginController", "login");
Router::add("/testeErro", "LoginController", "testeErro");
Router::add("/testeBD", "HomeController", "teste");
Router::add("/cadastro", "LoginController", "cadastro");