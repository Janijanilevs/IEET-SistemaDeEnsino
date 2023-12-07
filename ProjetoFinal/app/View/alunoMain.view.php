<?php 
use IeetSite\Model\DAO\AlunoDAO;
use IeetSite\Model\DAO\TurmaDAO;

componente('topo/topoAluno');?>
    <main >
        <div id="MainAlunoPerfil">  
            <div id="divAreaA"><h1 id="areaAluno">Área Do Aluno</h1></div>
            <div id="imgPerfilA">
                <h2><?=TurmaDAO::getById(AlunoDAO::getById($_SESSION['__usuario'])->__get('Turma_idTurma'))->__get('nome')?></h2>
                <img src="./public/imagens/perfil.png">
            </div>
            <div id="infAluno">
                <div class="dadosA-P"><h2>Nome: <?=AlunoDAO::getById($_SESSION['__usuario'])->__get('nome')?></h2></div>
                <div class="dadosA-P"><h2>Situação: Matriculado</h2></div>
                <div class="dadosA-P"><h2>Matricula: <?=AlunoDAO::getById($_SESSION['__usuario'])->__get('matricula')?></h2></div>
                <div class="dadosA-P"><h2>Data de Ingresso: <?=AlunoDAO::getById($_SESSION['__usuario'])->__get('dataDeCriacao')?></h2></div>
                <div class="dadosA-P"><h2>CPF: <?=AlunoDAO::getById($_SESSION['__usuario'])->__get('cpf')?></h2></div>
                <div class="dadosA-P"><h2>CRE 7,5</h2></div>
            </div>
            
        </div>
    </main>
<?=componente('rodape')?>