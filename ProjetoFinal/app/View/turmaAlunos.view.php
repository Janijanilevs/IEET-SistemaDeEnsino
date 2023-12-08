<?php
use IeetSite\Model\DAO\AlunoDAO;
use IeetSite\Model\DAO\TurmaDAO;
#var_dump($_GET['nomeDisciplina']);
#var_dump(TurmaDAO::getById($_GET['idTurma']));
$contador = 0;
foreach(AlunoDAO::getAll() as $count => $aluno) if($aluno->__get('Turma_idTurma') == $_GET['idTurma']) $contador = $count;
componente('topo/topoProfessor')?>
    <main >
        <div id="MainTurmaAlunos">
            <div id="titTurma"><h1><?=TurmaDAO::getById($_GET["idTurma"])->__get('nome')?></h1></div>
            <div id="extTopo">
                <div class="exTurma"><h2>Quantidade de Alunos</h2><h3><?= $contador ?></h3></div>
                <div class="exTurma"><h2>Carga Horaria</h2><h3><?= $_GET['cargaHoraria']?> Horas </h3></div>
                <div class="exTurma"><h2>Materia</h2><h3><?= $_GET['nomeDisciplina'] ?></h3></div>
            </div>
            
            <div id="listAProf">

                <?php foreach(AlunoDAO::getAll() as $count => $aluno){ 
                    if($aluno->__get('Turma_idTurma') == $_GET['idTurma']){?>

                <div class="AlunoList">
                    <img src="./public/imagens/perfil.png">
                    <h2><?= $aluno->__get('nome')?></h2>
                    <h2>N</h2>                 
                    <h2>N</h2>
                    <h2>N</h2>
                    <h2>M</h2>
                    <div id="modNotas"><a href="<?=linkrota('inserirNotas')?>?idAluno=<?=$aluno->__get('id')?>"><h2>Modificar Notas</h2></a></div>
                </div>
                
                <?php }}?>

            </div>

            <div id="butonAdVe">
                <div class="btsAV"><a href="<?=linkrota('inserirAtividades')?>?idDisciplina=<?= $_GET['idDisciplina']?>"><h2>Adicionar Atividades ou Material</h2></a></div>
                <div class="btsAV"><a href="<?=linkrota('verificaAtividade')?>?idDisciplina=<?= $_GET['idDisciplina']?>"><h2>Verificar Atividades</h2></a></div>
            </div>

        </div>
    </main>
<?=componente('rodape')?>