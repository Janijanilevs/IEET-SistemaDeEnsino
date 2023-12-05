<?php

use IeetSite\Core\Router;

/* Index */
Router::add("/", "HomeController", "index");


/* Login */
Router::add("/login", "LoginController", "login");
Router::add("/cadastro", "LoginController", "cadastro");

/* Teste Banco de Dados */

Router::add("/teste1", "HomeController", "teste");
Router::add("/teste2", "HomeController", "teste2");
Router::add("/teste3", "HomeController", "teste3");
Router::add("/teste4", "HomeController", "teste4");
Router::add("/teste5", "HomeController", "teste5");

/* Páginas: */
Router::add("/direcaoMain", "HomeController", "mainDirecao");
Router::add("/alunoMain", "HomeController", "mainAluno");
Router::add("/confirmacao", "HomeController", "confirmacao");
Router::add("/alunoBoletim", "HomeController", "alunoBoletim");
Router::add("/alunoMateriais", "HomeController", "atividadesAluno");
Router::add("/professorMain", "HomeController", "mainProfessor");
Router::add("/adicionarAluno", "HomeController", "adcAluno");
Router::add("/turmaAlunos", "HomeController", "turmaAlunos");
