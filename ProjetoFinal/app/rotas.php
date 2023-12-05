<?php

use IeetSite\Core\Router;


# Fase de teste: Usem get quando página 'Não exigir' segurança e post quando a página exigir segurança 
# Mas por enquando só criem usando get

/* Index */
Router::get("/", "HomeController", "index");


/* Login */
    /* Formularios:*/
        Router::get("/login", "LoginController", "login");
        Router::get("/cadastro", "LoginController", "cadastro");
        Router::get("/planos", "LoginController", "plano");
    /* Actions:*/
        Router::post("/logarconta", "LoginController", "logarConta");
        Router::post("/adicioAluno", "LoginController", "adicioAluno");
/* Teste Banco de Dados */

Router::get("/teste1", "TesteController", "teste");
Router::get("/teste2", "TesteController", "teste2");
Router::get("/teste3", "TesteController", "teste3");
Router::get("/teste4", "TesteController", "teste4");
Router::get("/teste5", "TesteController", "teste5");
Router::get("/teste6", "TesteController", "teste6");


/* Páginas: */
Router::get("/direcaoMain", "HomeController", "mainDirecao");
Router::get("/alunoMain", "HomeController", "mainAluno");
Router::get("/confirmacao", "HomeController", "confirmacao");
Router::get("/alunoBoletim", "HomeController", "alunoBoletim");
Router::get("/alunoMateriais", "HomeController", "atividadesAluno");
Router::get("/professorMain", "HomeController", "mainProfessor");
Router::get("/turmaAlunos", "HomeController", "turmaAlunos");
Router::get("/turmas", "HomeController", "turmas");
Router::get("/verificaAtividade", "HomeController", "verificaAtividade");
Router::get("/adicionarAluno", "HomeController", "adcAluno"); // Candidato para ir para login controller
Router::get("/adicionaProfessor", "HomeController", "adicionaProfessor");
Router::get("/adicionaTurma", "HomeController", "adicionaTurma");
Router::get("/inserirNotas", "HomeController", "inserirNotas");
Router::get("/inserirAtividades", "HomeController", "inserirAtividades");
Router::get("/dadosRequisicao", "HomeController", "dadosrequisicao");

/*
Router::post("/direcaoMain", "HomeController", "mainDirecao");
Router::post("/alunoMain", "HomeController", "mainAluno");
Router::post("/confirmacao", "HomeController", "confirmacao");
Router::post("/alunoBoletim", "HomeController", "alunoBoletim");
Router::post("/alunoMateriais", "HomeController", "atividadesAluno");
Router::post("/professorMain", "HomeController", "mainProfessor");
Router::post("/turmaAlunos", "HomeController", "turmaAlunos");
Router::post("/turmas", "HomeController", "turmas");
Router::post("/verificaAtividade", "HomeController", "verificaAtividade");
Router::post("/adicionarAluno", "HomeController", "adcAluno"); // Candidato para ir para login controller
Router::post("/adicionaProfessor", "HomeController", "adicionaProfessor");
Router::post("/adicionaTurma", "HomeController", "adicionaTurma");
Router::post("/inserirNotas", "HomeController", "inserirNotas");
Router::post("/inserirAtividades", "HomeController", "inserirAtividades");
*/





