<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="public/css/estilo.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&family=Water+Brush&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&family=Timmana&family=Water+Brush&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&family=Timmana&family=Urbanist&family=Water+Brush&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&family=Timmana&family=Urbanist&family=Water+Brush&family=Zilla+Slab&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Overpass+Mono&display=swap" rel="stylesheet">

    <title><?=$titulo?></title>
</head>
<body>
    <div id="body-simulador-topo">
        <header>
            <a href="/IEET-SistemaDeEnsino/ProjetoFinal/"  id="link-home-header">
                <img src="public/imagens/Logo-ieet-topo.png">
                <h1 id="ieet-header"> IEET </h1>
            </a>
            <a href="cadastro">
                <h1>Contrate nossos serviços</h1>
            </a>
            <a href="faleconosco"> 
                <h1>Fale conosco</h1>
            </a>
            <a href="login" id="login">
                <h1>Login</h1>
            </a>
        </header>
    </div>
<!-- A partir daqui é da página inicial.view.php-->

    <main id="main-inicial">
        <div id="banner">
            <img src="public/imagens/mulhermain.png">
            <section id="section-main-1">
                <h1>IEET Beneficios:</h1>
                <div id="section-beneficios">
                    <h2>+Simples</h2>
                    <h2>+Organizado</h2>
                    <h2>+Ensino</h2>
                    <h2>+Rapido</h2>
                    <h2>+Comunicação</h2>
                </div>
            </section>
        </div>

        <h1 id="possibilidades">Nossas Possibilidades:</h1>

        <div id="div-possibilidades">
            <section class="section-padrao"> 
                <div class="section-usuario">
                    <h2>Verifique seu boletim;</h2>
                    <h2>Complete? Conclua suas atividades;</h2>
                    <h2>Conheça seu progresso;</h2>
                    <h2>Veja seus materiais de estudo online.</h2>
                    </div>
                <a href="login">Acesse como aluno</a>
            </section>
            <section class="section-padrao">
                <div class="section-usuario"> 
                    <h2>Notifique rapidamente;</h2>
                    <h2>Gerencie suas turmas;</h2>
                    <h2>Informações organizadas;</h2>
                    <h2>Ouça sugestões.</h2>
                </div>
                <a href="login">Acesse como Direção</a>
            </section>
            <section class="section-padrao">
                <div class="section-usuario">
                    <h2>Organize suas turmas;</h2>
                    <h2>Lecione atividades;</h2>
                    <h2>Forneça materiais de estudo;</h2>
                    <h2>Comunique-se com seus alunos.</h2>
                </div>
                <a href="login">Acesse como Professor</a>
            </section>
        </div>
    </main>