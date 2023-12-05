<?=componente('topo/topoProfessor')?>
    <main >
        <div id="MainTurmaAlunos">
            <div id="titTurma"><h1>2º Ano B</h1></div>
            <div id="extTopo">
                <div class="exTurma"><h2>Quantidade de Alunos</h2><h3>19</h3></div>
                <div class="exTurma"><h2>Carga Horaria</h2><h3>180 Horas</h3></div>
                <div class="exTurma"><h2>Materia</h2><h3>Matematica</h3></div>
            </div>
            
            <div id="listAProf">
                <div class="AlunoList">
                    <img src="./public/imagens/perfil.png">
                    <h2>Cleiton da Silva</h2>
                    <h2>N</h2>                 
                    <h2>N</h2>
                    <h2>N</h2>
                    <h2>M</h2>
                    <div id="modNotas"><a href="<?=linkrota('')?>"><h2>Modificar Notas</h2></a></div>
                </div>
                <div class="AlunoList">
                    <img src="./public/imagens/perfil.png">
                    <h2>Cleiton da Silva</h2>
                    <h2>N</h2>                 
                    <h2>N</h2>
                    <h2>N</h2>
                    <h2>M</h2>
                    <div id="modNotas"><a href="<?=linkrota('')?>"><h2>Modificar Notas</h2></a></div>
                </div>
            </div>
            <div id="butonAdVe">
                <div class="btsAV"><a href="<?=linkrota('')?>"><h2>Adicionar Atividades ou Material</h2></a></div>
                <div class="btsAV"><a href="<?=linkrota('')?>"><h2>Verificar Atividades</h2></a></div>
            </div>
        </div>
    </main>
<?=componente('rodape')?>