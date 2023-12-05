<?php componente('topo/topoDirecao')?>
<main id="AdicionarAlunoForm">
    
    <form action="<?=linkrota('adicioAluno')?>" method="post" id="FormAdicionarAluno">
        <center>
        <h3><?= verificaSession()?></h3>
        </center>
        <title>Novo Aluno</title>
        <h1>Novo Aluno</h1>
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="cpf">CPF:</label>
        <input type="text" id="cpf" name="cpf" required>

        <label for="login">Login:</label>
        <input type="text" id="login" name="login" required>

        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required>

        <label for="dataNascimento">Data de Nascimento:</label>
        <input type="date" id="dataNascimento" name="dataDeNascimento" required>

        <input type="hidden" name="dataDeCriacao" value="<?=date('Y/m/d')?>">

        <label for="turma">Turma:</label>
        <input type="text" id="turma" name="Turma_idTurma" required>

        <input type="hidden" id="matricula" name="matricula" value="<?= getMatricula('Aluno') ?>">

        <label for="Direcao_id">Direção:</label>
        <input type="text" id="Direcao_id" name="Direcao_id" required>
        
        <button type="submit">Registrar</button>

    </form>
</main>
<?php componente('rodape')?>