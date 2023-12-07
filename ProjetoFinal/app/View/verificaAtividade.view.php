<?=componente('topo/topoProfessor')?>
    <main >
        <div id="MainProfessorVeriAtiv">  
        <div id="ImgPerfilAlunosMateriais">
            <img src="./public/imagens/perfil.png">
            <h1 class="titAM">Minhas Atividades</h1>
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
            <h1 class="titAM">Meus Materiais</h1>
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
        </div>
    </main>
<?=componente('rodape')?>