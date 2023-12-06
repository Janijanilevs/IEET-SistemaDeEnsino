<?=componente('topo/topoDirecao')?>
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
            <div class="flexInput">
            <label for="Direcao_id">Direção: </label>
            <input type="text" id="Direcao_id" name="Direcao_id" required>
            </div>
            <div class="buttonRegistra">
            <button type="submit">Registrar</button>
            </div>

        </form>
    </div>

    </main>
<?=componente('rodape')?>