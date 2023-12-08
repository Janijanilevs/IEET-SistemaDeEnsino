<?php

use IeetSite\Model\DAO\AlunoDAO;
?>
<?=componente('topo/topoProfessor')?>
    <main >
        <div id="MainProfessorNotas">  
            <div id="imgNotas">
                <img src="./public/imagens/perfil.png">
            </div>
            <div id="if2">
                <h2>Nome: <?= AlunoDAO::getById($_GET['idAluno'])->__get("nome")?></h2>
                <h2>Matricula: <?= AlunoDAO::getById($_GET['idAluno'])->__get("matricula")?></h2>
            </div>
            <div id="if1">
                <h2>Situação: Matriculado</h2>
            </div>

            <form action="<?=linkrota('adicioAluno')?>" method="post">
                <div id="formNotas">
                    <div id="tabTopo">
                        <h3>Nota 1</h3>
                        <h3>Nota 2</h3>
                        <h3>Nota 3</h3>
                        <h3>Media</h3>
                    </div>
                    <div id="linhaNota1">
                        <h2>Unidade 1</h2>
                        <div id="tabNotas1"  class="tabNotas">
                            <input type="number" id="nota1.1" name="nota1.1" step="0.1" min='0' max='10'>
                            <input type="number" id="nota1.1" name="nota1.2" step="0.1" min='0' max='10'>
                            <input type="number" id="nota1.1" name="nota1.3" step="0.1" min='0' max='10'>
                            <h3>Media1</h3>
                        </div>
                    </div>
                    <div id="linhaNota2">
                        <h2>Unidade 2</h2>
                        <div id="tabNotas2"  class="tabNotas">
                            <input type="number" id="nota2.1" name="nota2.1" step="0.1" min='0' max='10'>
                            <input type="number" id="nota2.1" name="nota2.2" step="0.1" min='0' max='10'>
                            <input type="number" id="nota2.1" name="nota2.3" step="0.1" min='0' max='10'>
                            <h3>Media2</h3>
                        </div>
                    </div>
                    <div id="linhaNota1">
                        <h2>Unidade 3</h2>
                        <div id="tabNotas1"  class="tabNotas">
                            <input type="number" id="nota3.1" name="nota3.1" step="0.1" min='0' max='10'>
                            <input type="number" id="nota3.1" name="nota3.2" step="0.1" min='0' max='10'>
                            <input type="number" id="nota3.1" name="nota3.3" step="0.1" min='0' max='10'>
                            <h3>Media3</h3>
                        </div>
                    </div>
                    <div id="btnM">
                        <div id="MediaF">
                            <h2>Media Final: Media</h2>
                        </div>
                        <div id="buttonBoletim"> 
                            <button type="submit">Salvar Dados</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </main>
<?=componente('rodape')?>