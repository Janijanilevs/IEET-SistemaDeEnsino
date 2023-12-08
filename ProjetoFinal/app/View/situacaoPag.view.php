<?php

use IeetSite\Model\DAO\DirecaoDAO;

 componente('topo/topoAdmin')?>
<main>
    <div id="verificaPag">
        <div id="TituloVerSit"><h1>Situação de Pagamento</h1></div>
        <div id="tabsituacao">

            <?php foreach(DirecaoDAO::getAll() as $contador => $escolas){ 
                if($contador%2 == 0){ $cor = 'nEscolaPag'; } else { $cor = 'nEscolaPag1'; }?>
            <div class="situacao">
                <div class="<?=$cor?>"><h2><?= $escolas->__get('nome') ?> </h2></div>
                <form action="<?=linkrota('alteraSituacao')?>?idEscola=<?=$escolas->__get('id')?>" method='post'>
                <div class="OpFormPag" >
                    <div class="divSelect">
                    <select name="situacao" id="seletorSit" placeholder="Situação" required>
                        <option value=""> Selecione a Situação</option>
                        <option value="Pago">Pago</option>
                        <option value="Pendente">Pendente</option>
                    </select>
                    </div>
                    <button type="submit">Confirmar Mudança</button>  
                </div>
                </form>
            </div>
            <?php }?>

           
        </div>
    </div>
</main>
<?php componente('rodape')?>