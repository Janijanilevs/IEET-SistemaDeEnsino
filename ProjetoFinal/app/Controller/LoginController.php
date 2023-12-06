<?php 

namespace IeetSite\Controller;

use IeetSite\Core\Controller;
use IeetSite\Model\Entities\Aluno;
use IeetSite\Model\DAO\AlunoDAO;
use IeetSite\Core\Validator;
use IeetSite\Core\helper;
use IeetSite\Model\DAO\DirecaoDAO;
use IeetSite\Model\DAO\ProfessorDAO;
use IeetSite\Model\DAO\TurmaDAO;
use IeetSite\Model\Entities\Direcao;
use IeetSite\Model\Entities\Professor;
use IeetSite\Model\Entities\Turma;

class LoginController extends Controller{

    public function login(){
        $this->view("login",["titulo" => "Página de Login - Ieet"]);
    }

    public function cadastro(){
        $this->view("cadastro",["titulo" => "Página de Cadastro - Ieet"]);
    }

    public function logarConta(){
        
        
    }

    public function plano(){
        $this->view("planosIeet", ["titulo" => "Nossos planos - Ieet"]);
    }

    public function adicioAluno(){
        $houveErro = Validator::execute(Aluno::getRegras(), $this->post());
        if($houveErro){
            addFormData($this->post());
            verificaSession(Validator::getListaErros(), "erro");
            redirecionar('adicionarAluno');
        }
        
       


        $adicionado = new Aluno($this->post());
        if(AlunoDAO::inserir($adicionado)){
            verificaSession(ltrim(get_class($adicionado), 'IeetSite\\Model\\Entities\\') . " {$adicionado->nome} foi cadastrado com sucesso!");
        }
        redirecionar('adicionarAluno');
    }

    public function adicionaProf(){
        $houveErro = Validator::execute(Professor::getRegras(), $this->post());
        if($houveErro){
            addFormData($this->post());
            verificaSession(Validator::getListaErros(), "erro");
            redirecionar('adicionaProfessor');
        }
        
       


        $adicionado = new Professor($this->post());
        if(ProfessorDAO::inserir($adicionado)){
            verificaSession(ltrim(get_class($adicionado), 'IeetSite\\Model\\Entities\\') . " {$adicionado->nome} foi cadastrado com sucesso!");
        }
        redirecionar('adicionaProfessor');
    }

    public function adicionaDirecao(){
        $houveErro = Validator::execute(Direcao::getRegras(), $this->post());
        if($houveErro){
            addFormData($this->post());
            verificaSession(Validator::getListaErros(), "erro");
            redirecionar('adicionaDirecao');
        }

        $adicionado = new Direcao($this->post());
        if(DirecaoDAO::inserir($adicionado)){
            verificaSession(ltrim(get_class($adicionado), 'IeetSite\\Model\\Entities\\') . " {$adicionado->nome} foi cadastrado com sucesso!");
        }
        redirecionar('adicionaDirecao');
    }

    public function adicionaTurma(){
        $houveErro = Validator::execute(Turma::getRegras(), $this->post());
        if($houveErro){
            addFormData($this->post());
            verificaSession(Validator::getListaErros(), "erro");
            redirecionar('adicionaTurma');
        }

        $adicionado = new Turma($this->post());
        if(TurmaDAO::inserir($adicionado)){
            verificaSession(ltrim(get_class($adicionado), 'IeetSite\\Model\\Entities\\') . " {$adicionado->nome} foi cadastrado com sucesso!");
        }
        redirecionar('adicionaTurma');
    }
}