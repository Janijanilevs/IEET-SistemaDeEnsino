<?php

use IeetSite\Model\DAO\DirecaoDAO;

    componente('topo/topoDirecao');
?>
    <main>
        <div id="MainProfessorPerfil">  
            <div id="divAreaP"><h1 id="areaProf">Área Da Direção</h1></div>
            <div id="imgPerfilP">
                <img src="./public/imagens/perfil.png">
            </div>
            <div id="infAluno">
                <div class="dadosA-P"><h2>Nome: <?=DirecaoDAO::getById($_SESSION['__usuario'])->__get('nome')?></h2></div>
                <div class="dadosA-P"><h2>Email: <?=DirecaoDAO::getById($_SESSION['__usuario'])->__get('email')?></h2></div>
                <div class="dadosA-P"><h2>CNPJ: <?=DirecaoDAO::getById($_SESSION['__usuario'])->__get('cnpj')?></h2></div>
                <div class="dadosA-P"><h2>Situação: <?=DirecaoDAO::getById($_SESSION['__usuario'])->__get('situacao')?></h2></div>
            </div>
            
        </div>
    </main>
<?php componente('rodape'); ?>