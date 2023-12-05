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

function verificaSession($mensagem = '', $tipo = "sucesso"){
    if(!empty($mensagem)){
        $_SESSION['__mensagem'] = [$mensagem, $tipo];
    }
    else if(empty($mensagem) && isset($_SESSION['__mensagem'])){
        [$mensagem, $tipo] = $_SESSION['__mensagem'];
        $retorno = "";
        $retorno .= "<div class='session {$tipo}'>";
        $retorno .= $mensagem . "</div>";
        unset($_SESSION['__mensagem']);
        return $retorno;
    }else{
        return "";
    }
}

function redirecionar(string $rota){
    header("location: ". linkrota($rota));
    die;
}

function getMatricula(string $tipo){
    switch($tipo){
        case 'Aluno':
            $tipoNum = ".04";
            break;
        case 'Professor':
            $tipoNum = ".03";
            break;
        case 'Direcao':
            $tipoNum = ".02";
            break;
    }
    return date('Y'). "." .rand(1, 999). "." .rand(1, 99). $tipoNum;
}
