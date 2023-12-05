<?=componente('topo/topoDirecao')?>
    <main id="AdicionarTurmaForm">
    <div id="divTurmaForm">
    <form action="<?=linkrota('adicioAluno')?>" method="post" class="FormAdicionar">
            <center>
            <h3><?= verificaSession()?></h3>
            </center>
            <title>Novo Professor</title>
            <h1>Novo Professor</h1>
            <div class="flexInput">
            <label for="nome">Nome: </label>
            <input type="text" id="nome" name="nome" required>
            </div>
            <div class="flexInput">
            <label for="email">Email: </label>
            <input type="email" id="email" name="email" required>
            </div>
            <div class="flexInput">
            <label for="cpf">CPF: </label>
            <input type="text" id="cpf" name="cpf" required>
            </div>
            <div class="flexInput">
            <label for="login">Login: </label>
            <input type="text" id="login" name="login" required>
            </div>
            <div class="flexInput">
            <label for="senha">Senha: </label>
            <input type="password" id="senha" name="senha" required>
            </div>
            <div class="flexInput">
            <label for="dataNascimento">Data de Nascimento: </label>
            <input type="date" id="dataNascimento" name="dataDeNascimento" required>
            </div>
            <div class="flexInput">
            <input type="hidden" name="dataDeCriacao" value="<?=date('Y/m/d')?>">
            </div>
            <div class="flexInput">
            <label for="turma">Formação: </label>
            <input type="text" id="formacao" name="Turma_idTurma" required>
            </div>
            <div class="flexInput">
            <input type="hidden" id="matricula" name="matricula" value="<?= getMatricula('Aluno') ?>">
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