<?php

use IeetSite\Model\DAO\DisciplinaDAO;
use IeetSite\Model\DAO\TurmaDAO;

componente('topo/topoProfessor');

?>
    <main id="mainTurmas">
        <h1>Minhas Turmas - Disciplinas</h1>
        <div id="MainProfessorTurmas">  
            <div class="agrupar">

                <?php foreach(DisciplinaDAO::getAll() as $disciplina){ 
                    if($_SESSION['__usuario'] == $disciplina->__get('usuario_professor_id')){?>
                        
                    
                    <div id="caixaTMProf" class="CaixaTarefasMateriais">
                        <h3 class="TituloTarefa"><?= TurmaDAO::getById($disciplina->__get('Turma_idTurma'))->__get('nome'); ?> </h3>
                        <div class="caixaTarefa">
                            <h3>Disciplina: <?= $disciplina->__get('nome') ?> </h3>
                            <a href="<?= linkrota('turmaAlunos')?>?idTurma= <?= $disciplina->__get('Turma_idTurma')?>&nomeDisciplina= <?= $disciplina->__get('nome')?>&cargaHoraria= <?= $disciplina->__get('carga_Horaria')?> ">
                            <h3>Ver Turma</h3></a>
                        </div>
                    </div>

                <?php }}?>

            </div>
            
        </div>
    </main>
<?=componente('rodape')?>