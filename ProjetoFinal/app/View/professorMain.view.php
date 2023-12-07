<?php

use IeetSite\Model\DAO\ProfessorDAO;

componente('topo/topoProfessor')?>
    <main >
        <div id="MainProfessorPerfil">  
            <div id="divAreaP"><h1 id="areaProf">Área Do Professor</h1></div>
            <div id="imgPerfilP">
                <img src="./public/imagens/perfil.png">
            </div>
            <div id="infAluno">
                <div class="dadosA-P"><h2>Nome: <?=ProfessorDAO::getById($_SESSION['__usuario'])->__get('nome')?></h2></div>
                <div class="dadosA-P"><h2>Situação: Matriculado</h2></div>
                <div class="dadosA-P"><h2>Matricula: <?=ProfessorDAO::getById($_SESSION['__usuario'])->__get('matricula')?></h2></div>
                <div class="dadosA-P"><h2>Data de Ingresso: <?=ProfessorDAO::getById($_SESSION['__usuario'])->__get('dataDeCriacao')?></h2></div>
                <div class="dadosA-P"><h2>CPF: <?=ProfessorDAO::getById($_SESSION['__usuario'])->__get('cpf')?></h2></div>
                <div class="dadosA-P"><h2>Formação: <?=ProfessorDAO::getById($_SESSION['__usuario'])->__get('formacao')?></h2></div>
            </div>
            
        </div>
    </main>
<?=componente('rodape')?>