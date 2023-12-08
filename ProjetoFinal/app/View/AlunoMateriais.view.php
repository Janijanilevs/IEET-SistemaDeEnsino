<?php

use IeetSite\Model\DAO\AlunoDAO;
use IeetSite\Model\DAO\AtividadesDAO;
use IeetSite\Model\DAO\DisciplinaDAO;
use IeetSite\Model\DAO\MateriaisDAO;

#var_dump((AlunoDAO::getById($_SESSION['__usuario']))->__get('Turma_idTurma'));
componente('topo/topoAluno');?>

    <main id="MainAlunosMateriais">
        <div id="ImgPerfilAlunosMateriais">
            <img src="./public/imagens/perfil.png">
            <h1 class="titAM">Minhas Tarefas</h1>
        </div>

        <div class="agrupar">
            <?php foreach(DisciplinaDAO::getAll() as $disciplina){
            if($disciplina->__get('Turma_idTurma') == AlunoDAO::getById($_SESSION['__usuario'])->__get('Turma_idTurma')){
            foreach(AtividadesDAO::getAll() as $atividade){
                    if($atividade->__get('Disciplinas_idDisciplinas') == $disciplina->__get('id')){
                          ?>
                <div class="CaixaTarefasMateriais">
                    <h3 class="TituloTarefa"> <?= $atividade->__get('nome')?> </h3>
                    <div class="caixaTarefa">
                        <h3>Disciplina: <?=$disciplina->__get('nome')?></h3>
                        <h3>Data de entrega:<?= $atividade->__get('dataFinal')?> </h3>
                        <h3>Descrição: <?= $atividade->__get('descricao')?></h3>
                    </div>
                </div>
            <?php }}}}?> <!-- fecha do atividades -->
        </div>
            


        <div id="materiaisDeEstudoDiv">
            <h1 class="titAM">Materiais de estudo</h1>
        </div>
        <div class="agrupar">
            <?php foreach(DisciplinaDAO::getAll() as $disciplina){
            if($disciplina->__get('Turma_idTurma') == AlunoDAO::getById($_SESSION['__usuario'])->__get('Turma_idTurma')){ foreach(MateriaisDAO::getAll() as $material){
                if($material->__get('disciplinas_id') == $disciplina->__get('id')){ ?> 
                <div class="CaixaTarefasMateriais">
                    <h3 class="TituloTarefa"><?=$material->__get('nome')?> </h3>
                    <div class="caixaTarefa">
                        <h3>Disciplina: <?=$disciplina->__get('nome')?></h3>
                        <h3>Link: <?=$material->__get('nome')?></h3>
                        <h3>Descrição: <?=$material->__get('nome')?></h3>
                    </div>
                </div>
            <?php }}}}?>
        </div>

    </main>
<?php componente('rodape')?>