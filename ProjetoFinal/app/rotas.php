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
        Router::post("/adicioProf", "LoginController", "adicionaProf");
        Router::post("/adicioDirecao", "LoginController", "adicionaDirecao");
        
        Router::post("/adicioTurma", "LoginController", "adicionaTurma");
        Router::post("/adicioDisciplina", "LoginController", "adicionaDisciplina");
        Router::post("/adicioAtividade", "LoginController", "adicionaAtividade");
        Router::post("/adicioMaterial", "LoginController", "adicionaMaterial");
        Router::post("/adicioNota", "LoginController", "adicionaNota");

        
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
Router::get("/dadosRequisicao", "HomeController", "dadosrequisicao");

Router::get("/adicionarAluno", "HomeController", "adcAluno"); // Candidato para ir para login controller
Router::get("/adicionaProfessor", "HomeController", "adicionaProfessor");
Router::get("/adicionaTurma", "HomeController", "adicionaTurma");
Router::get("/inserirNotas", "HomeController", "inserirNotas");
Router::get("/inserirAtividades", "HomeController", "inserirAtividades");
Router::get("/adicionaDirecao", "HomeController", "adicionaDirecao");