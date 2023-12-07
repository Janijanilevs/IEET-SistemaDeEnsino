<?php componente('topo/topoAdmin')?>
<main>
    <div id="verificaRegistro">
        <div id="TituloVerReg"><h1>Escolas Registradas</h1></div>
        <div id="AdUsuarioDirecao">
            <div id="regDir" class="adUsuario">
                <img src="./public/imagens/livrosRegAdmin.png">
                <div><a href="<?=linkrota('adicionaDirecao')?>"><h2>Inserir Dados</h2></a></div>
            </div>
        </div>
    </div>
</main>
<?php componente('rodape')?>