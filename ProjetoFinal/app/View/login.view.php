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
                <center>
                    <h3><?= verificaSession()?></h3>
                </center>
                    <form action="<?=linkrota('autentica')?>" method="post">
                        <label class="campoDados">
                            <input type="text" name="login" placeholder="Login" required class="dados">   
                        </label>
                        <label class="campoDados">
                            <input type="password" name="senha" placeholder="Senha" required class="dados">   
                        </label>
                        <div id="selectForm">
                            <select name="tipo" id="seletortipo" placeholder="Tipo" required>

                                <option value=""> Selecione o nivel de usuário </option>
                                <option value="1"> Entrar como Admin </option>
                                <option value="2"> Entrar como Direção </option>
                                <option value="3"> Entrar como Professor </option>
                                <option value="4"> Entrar como Aluno </option>

                            </select>
                        </div>
                        <button name="acessar" class="botaoAcesso"> Acessar </button>
                        <a href="<?=linkrota("")?>"><h1> Voltar para a página inicial</h1></a>
                    </form>
                </div>
            </div>
        </main>
</body>
</html>