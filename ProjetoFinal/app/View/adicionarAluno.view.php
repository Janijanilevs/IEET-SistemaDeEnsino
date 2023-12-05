<?php componente('topo/topoDirecao')?>
<main id="AdicionarAlunoForm">
    <h1>Novo Aluno</h1>

    <form action="#" method="post">

        <!-- Campo Nome -->
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>

        <!-- Campo Email -->
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <!-- Campo CPF -->
        <label for="cpf">CPF:</label>
        <input type="text" id="cpf" name="cpf" required>

        <!-- Campo Login -->
        <label for="login">Login:</label>
        <input type="text" id="login" name="login" required>

        <!-- Campo Senha -->
        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required>

        <!-- Campo Data de Nascimento -->
        <label for="dataNascimento">Data de Nascimento:</label>
        <input type="date" id="dataNascimento" name="dataNascimento" required>

        <!-- Campo Turma -->
        <label for="turma">Turma:</label>
        <input type="text" id="turma" name="turma" required>

        <!-- Campo Matrícula -->
        <label for="matricula">Matrícula:</label>
        <input type="text" id="matricula" name="matricula" required>

        <!-- Botão de envio -->
        <button type="submit">Cadastrar</button>

    </form>
</main>
<?php componente('rodape')?>