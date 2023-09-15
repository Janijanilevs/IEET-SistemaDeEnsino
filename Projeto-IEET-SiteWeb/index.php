<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="estilos/estiloPrincipal.css" rel="stylesheet"><!-- Isso são links de arquivos diferentes para coisas mais inportantes como o menu e o rodapé onde todos vão herdar essas estilizaçõees-->
    <link href="estilos/estiloIndex.css" rel="stylesheet"> <!-- E o arquivo css da propria pagina para estilizar a mesma-->
    <title>IEET- Sistema de Ensino</title>
    <!-- Essa será a pagina de login e nos utilizaremos essa pagina apenas para enviar o usuario as paginas e facilitar a mobilidade-->
</head>
<body>
    <main>
        <div id="loginTotal">
            <img id="logo" src="imagens/Logo.png" alt="IEET">
            <div id="formLogin">
                <form action="paginaPrincipal.html" method="post">
                    <label class="campoDados">
                        <input type="email" name="email" placeholder="Email" required class="dados">   
                    </label>
                    <label class="campoDados">
                        <input type="text" name="senha" placeholder="Senha" required class="dados">   
                    </label>
                    <button name="acessar" class="botaoAcesso"> Acessar </button>
                </form>
            </div>
            <a id="botaoCrieConta" href="criarConta.html"><h5>Não tem um conta? Clique aqui e crie uma agora.</h5></a>
        </div>
    </main>
</body>
</html>