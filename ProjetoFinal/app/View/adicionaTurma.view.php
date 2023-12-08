<?php

componente('topo/topoDirecao')?>
    <main id="AdicionarTurmaForm">
    <div id="divTurmaForm">
    <form action="<?=linkrota('adicioTurma')?>" method="post" class="FormAdicionar">
            <center>
            <h3><?= verificaSession()?></h3>
            </center>
            <title>Nova Turma</title>
            <h1>Nova Turma</h1>
            <div class="flexInput">
            <label for="nome">Nome: </label>
            <input type="text" id="nome" name="nome" required>
            </div>
            <input type="hidden" id="Direcao_id" name="Direcao_id" value="<?= $_SESSION['__usuario'] ?>">
            <div class="buttonRegistra">
            <button type="submit">Registrar</button>
            </div>

        </form>
    </div>

    </main>
<?=componente('rodape')?>