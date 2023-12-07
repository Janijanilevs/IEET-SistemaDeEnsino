<?php componente('topo/topoAluno')?>

    <main id="MainAlunosMateriais">
        <div id="ImgPerfilAlunosMateriais">
            <img src="./public/imagens/perfil.png">
            <h1 class="titAM">Minhas Tarefas</h1>
        </div>
        <div class="agrupar">
            <?php for($i = 0; $i < 5 ; $i++){ ?> 
                <div class="CaixaTarefasMateriais">
                    <h3 class="TituloTarefa">Título </h3>
                    <div class="caixaTarefa">
                        <h3>Data de entrega: 55/55/5555</h3>
                        <h3>Descrição: </h3>
                    </div>
                </div>
            <?php }?>
        </div>



        <div id="materiaisDeEstudoDiv">
            <h1 class="titAM">Materiais de estudo</h1>
        </div>
        <div class="agrupar">
            <?php for($i = 0; $i < 5 ; $i++){ ?> 
                <div class="CaixaTarefasMateriais">
                    <h3 class="TituloTarefa">Título </h3>
                    <div class="caixaTarefa">
                        <h3>Link:</h3>
                        <h3>Descrição: </h3>
                    </div>
                </div>
            <?php }?>
        </div>
    </main>
<?php componente('rodape')?>