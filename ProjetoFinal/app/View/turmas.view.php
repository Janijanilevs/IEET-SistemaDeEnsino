<?=componente('topo/topoProfessor')?>
    <main id="mainTurmas">
        <h1>Minhas Turmas</h1>
        <div id="MainProfessorTurmas">  
            
            
            <div class="agrupar">
                <?php for($i = 0; $i < 21 ; $i++){ ?> 
                    <div class="CaixaTarefasMateriais">
                        <h3 class="TituloTarefa">TurmaNome </h3>
                        <div class="caixaTarefa">
                            <h3>Disciplina:</h3><p></p>
                            <a href=""><h3>Ver Turma</h3></a>
                        </div>
                    </div>
                <?php }?>
            </div>
            
        </div>
    </main>
<?=componente('rodape')?>