<?php
    $endereco = $_GET["Nivel"] ?? "";


?>
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
                <form action="paginas/<?=$endereco?>/<?=$endereco?>.php" method="get">
                    <label>Cargo:
                        <select name="destino">
                            <option <?= $endereco == "" ? "selected" : "" ?> ></option>
                            <option <?= $endereco == "aluno" ? "selected" : "" ?> value="aluno">Aluno</option>
                            <option <?= $endereco == "direcao" ? "selected" : "" ?> value="direcao">Direcao</option>			
                            <option <?= $endereco == "professor" ? "selected" : "" ?> value="professor">Professor</option>			
                        </select>
                    </label>
                    <label>Email:
                        <input type="email" name="email" required>   
                    </label>
                    <label>Senha:
                        <input type="text" name="senha" required>   
                    </label>
                    <button name="acessar"> Acessar </button>
                </form>
            </div>
        </div>
    </main>
</body>
</html>