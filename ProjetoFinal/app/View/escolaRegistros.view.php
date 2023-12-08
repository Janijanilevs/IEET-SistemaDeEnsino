<?php

use IeetSite\Model\DAO\DirecaoDAO;

componente('topo/topoAdmin')?>
<main>
    <div id="verificaRegistro">
        <div id="TituloVerReg"><h1>Escolas Registradas</h1></div>
        <div id="tabEscolas">
            <div id="InfTabReg">
                <div class="nEscola"></div>
                <div class="nCnpj"><h2>CNPJ</h2></div>
                <div class="nCont"><h2>CONTATO</h2></div>
                <div class="nSit"><h2>SITUAÇÃO</h2></div>
                <div class="nUsu"><h2>USUÁRIOS</h2></div>
            </div>
            <?php foreach(DirecaoDAO::getAll() as $contador => $escola){
                    if($contador%2 == 0){ $cor = "linha1TabReg"; }else{ $cor = "linha2TabReg"; }?>
                <div class="<?= $cor ?>">
                    <div class="nEscola"><h2> <?=$escola->__get('nome')?> </h2></div>
                    <div class="nCnpj"><h2><?=$escola->__get('cnpj')?></h2></div>
                    <div class="nCont"><h2><?=$escola->__get('email')?></h2></div>
                    <div class="nSit"><h2><?=$escola->__get('situacao')?></h2></div>
                    <div class="nUsu"><h2>1020  </h2></div>
                </div>
            <?php  }?>

        </div>
        <div id="altSit"><a href="<?=linkrota('situacaoPag')?>"><h1>Alterar Situação</h1></a></div>
    </div>
</main>
<?php componente('rodape')?>