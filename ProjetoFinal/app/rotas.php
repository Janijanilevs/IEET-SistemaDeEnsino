<?php

use IeetSite\Core\Router;


# Fase de teste: Usem get quando página 'Não exigir' segurança e post quando a página exigir segurança 
# Mas por enquando só criem usando get


# Router::Metodo("Identificado na barra de URL", "Controlador da função", "Função dentro do controllador");


/* Acesso: Padrão */
Router::get("/", "HomeController", "index");    // Index
Router::get("/confirmacao", "HomeController", "confirmacao");   // Página de confirmação, provavelmente não será utilizada

Router::get("/dadosRequisicao", "HomeController", "dadosrequisicao"); // Página

/* Acesso: Aluno */
Router::get("/alunoMain", "HomeController", "mainAluno");   // Alunos: Parte inicial
Router::get("/alunoBoletim", "HomeController", "alunoBoletim"); // Alunos: Parte de boletim
Router::get("/alunoMateriais", "HomeController", "atividadesAluno"); // Alunos: Parte de atividades e materiais


/* Acesso: Professor */
Router::get("/professorMain", "HomeController", "mainProfessor");   // Professor: Parte inicial
Router::get("/turmaAlunos", "HomeController", "turmaAlunos");   // Professor: Página da turma
Router::get("/turmas", "HomeController", "turmas"); // Professor: Página onde vemos todas as suas turmas
Router::get("/verificaAtividade", "HomeController", "verificaAtividade");   // Professor: Página onde vemos todas as suas atividades e Materiais daquela turma
Router::get("/inserirNotas", "HomeController", "inserirNotas"); // Professor: Inserir Notas
Router::get("/inserirAtividades", "HomeController", "inserirAtividades"); // Professor: Inserir atividades

/* Acesso: Direcao */
Router::get("/direcaoMain", "HomeController", "mainDirecao"); // Direção: Parte inicial
Router::get("/adicionarAluno", "HomeController", "adcAluno"); // Direcao: Adicionar Aluno
Router::get("/adicionaProfessor", "HomeController", "adicionaProfessor"); // Direcao: Adicionar professor
Router::get("/adicionaTurma", "HomeController", "adicionaTurma");   // Direcao: Adicionar Turma
Router::get("/adicionaDisciplina", "HomeController", "adicionaDisciplina");   // Direcao: Adicionar Disciplina

/* Acesso: Admin */
Router::get("/adicionaDirecao", "HomeController", "adicionaDirecao"); // ADMIN: Adicionar Direcao
Router::get("/adminMain", "HomeController", "adminMain"); // ADMIN: Adicionar Direcao
Router::get("/escolaRegistros", "HomeController", "escolaResgistros"); // ADMIN: P
Router::get("/situacaoPag", "HomeController", "situacaoPag"); // ADMIN: P

/* Login */
    /* Formularios:*/
        Router::get("/login", "LoginController", "login");
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
        Router::post('/autentica','LoginController','autentica');
        
/* Teste Banco de Dados */

Router::get("/teste1", "TesteController", "teste");
Router::get("/teste2", "TesteController", "teste2");
Router::get("/teste3", "TesteController", "teste3");
Router::get("/teste4", "TesteController", "teste4");
Router::get("/teste5", "TesteController", "teste5");
Router::get("/teste6", "TesteController", "teste6");
