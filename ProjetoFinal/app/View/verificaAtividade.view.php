<?php

use IeetSite\Model\DAO\AtividadesDAO;
use IeetSite\Model\DAO\MateriaisDAO;
use IeetSite\Model\Entities\Materiais;

 componente('topo/topoProfessor')?>
    <main >
        <div id="MainProfessorVeriAtiv">  
        <div id="ImgPerfilAlunosMateriais">
            <img src="./public/imagens/perfil.png">
            <h1 class="titAM">Minhas Atividades</h1>
        </div>
        <div class="agrupar">
           
                <?php foreach(AtividadesDAO::getAll() as $atividade){ if($atividade->__get('Disciplinas_idDisciplinas') == $_GET['idDisciplina']){ ?>
                <div class="CaixaTarefasMateriais">
                    <h3 class="TituloTarefa"><?=$atividade->__get('nome')?></h3>
                    <div class="caixaTarefa">
                        <h3>Data de entrega: <?=$atividade->__get('dataFinal')?></h3>
                        <h3>Descrição: <?=$atividade->__get('descricao')?></h3>
                    </div>
                </div>
                <?php }}?>

        </div>



        <div id="materiaisDeEstudoDiv">
            <h1 class="titAM">Meus Materiais</h1>
        </div>
        <div class="agrupar">
            
            <?php foreach(MateriaisDAO::getAll() as $material){
                if($material->__get('disciplinas_id') == $_GET['idDisciplina']){?> 
                <div class="CaixaTarefasMateriais">
                    <h3 class="TituloTarefa"><?= $material->__get('nome')?> </h3>
                    <div class="caixaTarefa">
                        <h3>Link:<a href='<?= $material->__get('link')?>' target="_blank"> Material</a> </h3>
                        <h3>Descrição: <?= $material->__get('descricao')?></h3>
                    </div>
                </div>
            <?php }}?>
        </div>
        </div>
    </main>
<?=componente('rodape')?>