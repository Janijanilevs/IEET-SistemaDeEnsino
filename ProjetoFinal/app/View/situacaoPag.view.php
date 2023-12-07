<?php componente('topo/topoAdmin')?>
<main>
    <div id="verificaPag">
        <div id="TituloVerSit"><h1>Situação de Pagamento</h1></div>
        <div id="tabsituacao">
            <div class="situacao">
                <div class="nEscolaPag"><h2>Ifba Campus Brumado</h2></div>
                <form action="">
                <div class="OpFormPag" >
                    <div class="divSelect">
                    <select name="tipo" id="seletorSit" placeholder="Situação" required>
                        <option value=""> Selecione a Situação</option>
                        <option value="1">Pago</option>
                        <option value="2">Pendente</option>
                    </select>
                    </div>
                    <button type="submit">Confirmar Mudança</button>  
                </div>
                </form>
            </div>
            <div class="situacao">
                <div class="nEscolaPag1"><h2>Ifba Campus Brumado</h2></div>
                <form action="">
                <div class="OpFormPag" >
                    <div class="divSelect">
                    <select name="tipo" id="seletorSit" placeholder="Situação" required>
                        <option value=""> Selecione a Situação</option>
                        <option value="1">Pago</option>
                        <option value="2">Pendente</option>
                    </select>
                    </div>
                    <button type="submit">Confirmar Mudança</button>  
                </div>
                </form>
            </div>
        </div>
    </div>
</main>
<?php componente('rodape')?>