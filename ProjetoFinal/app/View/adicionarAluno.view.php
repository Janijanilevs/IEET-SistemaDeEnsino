<?php componente('topo/topoDirecao')?>
<main id="AdicionarAlunoForm">

    <form action="form.php" method="post" id="FormAdicionarAluno">
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
        <input type="date" id="dataNascimento" name="dataNascimento" required>

        <label for="turma">Turma:</label>
        <input type="text" id="turma" name="turma" required>

        <label for="matricula">Matrícula:</label>
        <input type="text" id="matricula" name="matricula" required>
        
        <button type="submit">Registrar</button>

    </form>
</main>
<?php componente('rodape')?>