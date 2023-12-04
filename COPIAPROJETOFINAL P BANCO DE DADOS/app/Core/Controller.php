<?php

namespace IeetSite\Core;

abstract class Controller{
    protected function view(string $arquivo,array $dados=[]){
        extract($dados); // 'Quebra' o array e cria variaveis com os nomes associados aos valores
        require PASTA_VIEW. "{$arquivo}.view.php"; //Cria um endereço automatico para conecção
    }
}