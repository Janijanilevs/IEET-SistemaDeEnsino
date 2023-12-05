<?=componente('topo/topoAdmin')?>
    <main id="RequisicaoForm">
    <div id="divReqForm">
        <form action="<?=linkrota('')?>" method="post" class="FormAdicionar">
            <center>
            <h3><?= verificaSession()?></h3>
            </center>
            <title>Nova Direção</title>
            <h1>Cadastrar Direção</h1>
            <div class="flexInput">
            <label for="nome">Nome Da Instituição: </label>
            <input type="text" id="nome" name="nome" required>
            </div>
            <div class="flexInput">
            <label for="cnpj">CNPJ: </label>
            <input type="text" id="cnpj" name="cnpj" required>
            </div>
            <div class="flexInput">
            <label for="cpf">CPF: </label>
            <input type="text" id="cpf" name="cpf" required>
            </div>
            <div class="flexInput">
            <label for="email">Email: </label>
            <input type="email" id="email" name="email" required>
            </div>
            <div class="flexInput">
            <label for="login">Login: </label>
            <input type="text" id="login" name="login" required>
            </div>
            <div class="flexInput">
            <label for="senha">Senha: </label>
            <input type="password" id="senha" name="senha" required>
            </div>
            <div class="buttonRegistra">
            <button type="submit">Registrar</button>
            </div>

        </form>
    </div>
    </main>
<?=componente('rodape')?>

    
