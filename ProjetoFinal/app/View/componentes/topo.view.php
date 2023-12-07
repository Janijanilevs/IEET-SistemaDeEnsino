<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?=css('estilo')?>">
    <link rel="stylesheet" type="text/css" href="<?=css('estiloLuan')?>">
    <link rel="stylesheet" type="text/css" href="<?=css('estiloLevi')?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Overpass+Mono&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&family=Timmana&family=Ubuntu&family=Urbanist&family=Water+Brush&family=Zilla+Slab&display=swap" rel="stylesheet">
    <title><?=$titulo?></title>
</head>
<body>
    <div id="body-simulador-topo">
        <header>
            <a href="<?=linkrota('')?>"  id="link-home-header">
                <img src="public/imagens/Logo-ieet-topo.png">
                <h1 id="ieet-header"> IEET </h1>
            </a>
            <a href="<?=linkrota('planos')?>">
                <h1>Contrate nossos serviços</h1>
            </a>
            <a href="<?=linkrota('')?>"> 
                <h1>Fale conosco</h1>
            </a>
            <a href="<?=linkrota('login')?>" id="login">
                <h1>Login</h1>
            </a>
        </header>
    </div>