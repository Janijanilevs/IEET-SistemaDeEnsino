<?php componente('topo/topoAdmin')?>
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
            <div class="linha1TabReg">
                <div class="nEscola"><h2>Ifba Campus Brumado</h2></div>
                <div class="nCnpj"><h2>123456</h2></div>
                <div class="nCont"><h2>celtinha@gmail.com</h2></div>
                <div class="nSit"><h2>Pendente</h2></div>
                <div class="nUsu"><h2>1020  </h2></div>
            </div>
            <div class="linha2TabReg">
                <div class="nEscola"><h2>Ifba Campus Brumado</h2></div>
                <div class="nCnpj"><h2>123456</h2></div>
                <div class="nCont"><h2>celtinha@gmail.com</h2></div>
                <div class="nSit"><h2>Pendente</h2></div>
                <div class="nUsu"><h2>1020  </h2></div>
            </div>
            <div class="linha1TabReg">
                <div class="nEscola"><h2>Ifba Campus Brumado</h2></div>
                <div class="nCnpj"><h2>123456</h2></div>
                <div class="nCont"><h2>celtinha@gmail.com</h2></div>
                <div class="nSit"><h2>Pendente</h2></div>
                <div class="nUsu"><h2>1020  </h2></div>
            </div>
        </div>
        <div id="altSit"><a href="<?=linkrota('situacaoPag')?>"><h1>Alterar Situação</h1></a></div>
    </div>
</main>
<?php componente('rodape')?>