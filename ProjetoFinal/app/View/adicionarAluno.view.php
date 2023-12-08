<?php

use IeetSite\Model\DAO\TurmaDAO;


 componente('topo/topoDirecao')?>
<main id="AdicionarAlunoForm">
    <div id="divAlunoForm">
        <form action="<?=linkrota('adicioAluno')?>" method="post" class="FormAdicionar">
            <center>
            <h3><?= verificaSession()?></h3>
            </center>
            <title>Novo Aluno</title>
            <h1>Novo Aluno</h1>
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
            <div class="flexSelectAluno">

            <select name="Turma_idTurma" id="seletortipo" required>
                <option value=""> Selecione a turma do aluno </option>
            <?php foreach(TurmaDAO::getAll() as $turma){
                if($turma->__get('Direcao_id') == $_SESSION['__usuario']){?>
                    <option value="<?= $turma->__get('id') ?> "> <?= $turma->__get('nome') ?> </option>
            <?php }} ?>
            </select>
            
            </div>
            <div class="flexInput">
            <input type="hidden" id="matricula" name="matricula" value="<?= getMatricula('Aluno') ?>" required >
            </div>
            <input type="hidden" id="Direcao_id" name="Direcao_id" value=" <?= $_SESSION['__usuario'] ?> " >
            <div class="buttonRegistra">
            <button type="submit">Registrar</button>
            </div>

        </form>
    </div>
</main>
<?php componente('rodape')?>