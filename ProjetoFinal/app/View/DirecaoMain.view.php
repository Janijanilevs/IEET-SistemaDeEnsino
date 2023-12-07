<?=componente('topo/topoDirecao')?>
    <main id="MainRegistroEscolar">
        <div id="TituloDirecaoMain"><h1>Registro Escolar</h1></div>

        <div id="EscolhaUsuarioDirecao">
            <div class="adUsuario">
                <img src="./public/imagens/AlunoDirecao.png">
                <div><a href="<?=linkrota('adicionarAluno')?>"><h2>Aluno</h2></a></div>
            </div>
            <div class="adUsuario">
                <img src="./public/imagens/ProfessorDirecao.png">
                <div><a href="<?=linkrota('adicionaProfessor')?>"><h2>Professor</h2></a></div>
            </div>
            <div class="adUsuario">
                <img src="./public/imagens/turma2ano.png">
                <div><a href="<?=linkrota('adicionaTurma')?>"><h2>Turma</h2></a></div>
            </div>
        </div>
       
    </main>
<?=componente('rodape')?>