<?php

namespace IeetSite\Core;

abstract class Controller{

    protected array $postvars = [];
    protected array $getvars = [];

    public function __construct(){
        $this->postvars = $_POST ?? [];
        $this->getvars = $_GET ?? [];
    }

    protected function view(string $arquivo,array $dados=[]){
        extract($dados); // 'Quebra' o array e cria variaveis com os nomes associados aos valores
        require PASTA_VIEW. "{$arquivo}.view.php"; //Cria um endereço automatico para conecção
    }

    protected function post(?string $nome = NULL){
        if(is_null($nome)){
            return $this->postvars;
        }

        if(key_exists($nome, $this->postvars)){
            return $this->postvars[$nome];
        }else{
            return NULL;
        }
    }

    protected function get(?string $nome = NULL){
        if(is_null($nome)){
            return $this->getvars;
        }
        
        if(key_exists($nome, $this->getvars)){
            return $this->getvars[$nome];
        }else{
            return NULL;
        }
    }
    
    public function input(?string $nome = NULL){
        if(is_null($nome)){
            return NULL;
        }
        $inputs = array_merge($this->postvars, $this->getvars);
        if(key_exists($nome, $inputs)){
            return $inputs[$nome];
        }
        return NULL;
    }

    public function all(){
        $inputs = array_merge($this->postvars, $this->getvars);
        return $inputs;
    }
}