<?=componente('topo')?>
    <main id="RequisicaoForm">
    <div id="divReqForm">
        <form action="<?=linkrota('confirmacao')?>" method="post" class="FormAdicionar">
            <center>
            <h3><?= verificaSession()?></h3>
            </center>
            <title>Novo Cadastro</title>
            <h1>Inserir Dados</h1>
            <div class="flexInput">
            <label for="nome">Nome Da Instituição: </label>
            <input type="text" id="nome" name="nome" required>
            </div>
            <div class="flexInput">
            <label for="cnpj">CNPJ: </label>
            <input type="text" id="cnpj" name="cnpj" required>
            </div>
            <div class="flexInput">
            <label for="email">Email: </label>
            <input type="email" id="email" name="email" required>
            </div>

            <div class="buttonRegistra">
            <button type="submit">Enviar Requisição</button>
            </div>

        </form>
    </div>
    </main>
<?=componente('rodape')?>

    
