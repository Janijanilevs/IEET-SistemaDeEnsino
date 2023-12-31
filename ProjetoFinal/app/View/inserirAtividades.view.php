<?=componente('topo/topoProfessor'); ?>
    <main >
        <div id="MainProfessorInAtiv">  
            <form action="<?=linkrota('adicioAtividade')?>" method="post" class="FormAdicionar">
                <center>
                <h3><?= verificaSession()?></h3>
                </center>
                <title>Nova Atividade</title>
                <h1>Nova Atividade</h1>
                <div class="flexInput">
                <label for="nome">Titulo: </label>
                <input type="text" id="nome" name="nome" required>
                </div>
                <div class="flexInput">
                <label for="descricao">Descrição: </label>
                <input type="text" id="descricao" name="descricao" required>
                </div>
                <div class="flexInput">
                <label for="dataEntrega">Data de Entrega: </label>
                <input type="date" id="dataEntrega" name="dataFinal" required>
                </div>
                <input type='hidden' name='dataInicial' value='<?= date('Y-m-d') ?>'>
                <input type='hidden' name="Disciplinas_idDisciplinas" value='<?= intval($_GET['idDisciplina']) ?>' >
                <div class="buttonRegistra">
                <button type="submit">Enviar</button>
                </div>
            </form>
            <form action="<?=linkrota('adicioMaterial')?>" method="post" class="FormAdicionar">
                <center>
                <h3><?= verificaSession()?></h3>
                </center>
                <title>Novo Material</title>
                <h1>Novo Material</h1>
                <div class="flexInput">
                <label for="nome">Titulo: </label>
                <input type="text" id="nome" name="nome" required>
                </div>
                <div class="flexInput">
                <label for="link">Link: </label>
                <input type="text" id="link" name="link" required>
                </div>
                <div class="flexInput">
                <label for="descricao">Descrição: </label>
                <input type="text" id="descricao" name="descricao" required>
                </div>
                <input type='hidden' name="disciplinas_id" value='<?= intval($_GET['idDisciplina']) ?>' >
                <div class="buttonRegistra">
                <button type="submit">Enviar</button>
                </div>

            </form>
        </div>
    </main>
<?=componente('rodape')?>