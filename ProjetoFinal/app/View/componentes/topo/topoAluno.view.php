<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?=css('estilo')?>">
    <link rel="stylesheet" type="text/css" href="<?=css('estiloLevi')?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&family=Water+Brush&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&family=Timmana&family=Water+Brush&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&family=Timmana&family=Urbanist&family=Water+Brush&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&family=Timmana&family=Urbanist&family=Water+Brush&family=Zilla+Slab&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Overpass+Mono&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Paytone+One&display=swap" rel="stylesheet">
    <title><?=$titulo?></title>
</head>
<body>
    <header>
        <a href="<?=linkrota('')?>"  id="link-home-header">
            <img src="public/imagens/Logo-ieet-topo.png">
            <h1 id="ieet-header"> IEET </h1>
        </a>
        <a href="<?=linkrota('')?>">
            <h1>Boletim</h1>
        </a>
        <a href="<?=linkrota('')?>"> 
            <h1>Atividades<br>Material de estudo</h1>
        </a>
        <a href="<?=linkrota('')?>" id="login">
            <h1>Perfil</h1>
        </a>
    </header>