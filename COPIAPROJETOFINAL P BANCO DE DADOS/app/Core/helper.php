<?php 

function css(string $arquivo): string{
    return "http://localhost/ieet-SistemaDeEnsino/ProjetoFinal/public/css/{$arquivo}.css";
}

function componente(string $componente){
    require PASTA_VIEW . "componentes/{$componente}.view.php";
}

function linkrota($rota = ""){
    return URL_BASE . "$rota";
}
