<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?=css('estilo')?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Overpass+Mono&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&family=Timmana&family=Ubuntu&family=Urbanist&family=Water+Brush&family=Zilla+Slab&display=swap" rel="stylesheet">
    <title><?=$titulo?></title>
</head>
<body>
        <main>
            <div id="loginTotal">
                <img id="logo" src="public/imagens/Logo.png" alt="IEET">
                <div id="formLogin">
                    <form action="direcionamento.php" method="post">
                        <label class="campoDados">
                            <input type="text" name="email" placeholder="Login" required class="dados">   
                        </label>
                        <label class="campoDados">
                            <input type="password" name="senha" placeholder="Senha" required class="dados">   
                        </label>
                        <label class="campoDados">
                            <input type="hidden" name="tipo" placeholder="Tipo" required class="dados">
                        </label>
                        <button name="acessar" class="botaoAcesso"> Acessar </button>
                    </form>
                </div>
            </div>
        </main>
</body>
</html>