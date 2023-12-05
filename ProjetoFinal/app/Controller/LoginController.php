<?php 

namespace IeetSite\Controller;

use IeetSite\Core\Controller;
use IeetSite\Model\Entities\Aluno;
use IeetSite\Model\DAO\AlunoDAO;
use IeetSite\Core\Validator;

class LoginController extends Controller{

    public function login(){
        $this->view("login",["titulo" => "Página de Login - Ieet"]);
    }

    public function cadastro(){
        $this->view("cadastro",["titulo" => "Página de Cadastro - Ieet"]);
    }

    public function logarConta(){
        /* Por enquanto funcionando como cadastros */
        
    }

    public function adicioAluno(){
        if(Validator::execute(Aluno::getRegras(), $this->post()))
        


        $adicionado = new Aluno($this->post());
        if(AlunoDAO::inserir($adicionado)){
            verificaSession(ltrim(get_class($adicionado), 'IeetSite\\Model\\Entities\\') . " {$adicionado->nome} foi cadastrado com sucesso!");
        }
        redirecionar('adicionarAluno');
    }

}