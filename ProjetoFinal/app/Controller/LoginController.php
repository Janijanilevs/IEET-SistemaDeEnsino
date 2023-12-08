<?php 

namespace IeetSite\Controller;

use IeetSite\Core\Controller;
use IeetSite\Model\Entities\Aluno;
use IeetSite\Model\DAO\AlunoDAO;
use IeetSite\Core\Validator;
use IeetSite\Core\helper;
use IeetSite\Model\DAO\AdminDAO;
use IeetSite\Model\DAO\AtividadesDAO;
use IeetSite\Model\DAO\DirecaoDAO;
use IeetSite\Model\DAO\DisciplinaDAO;
use IeetSite\Model\DAO\MateriaisDAO;
use IeetSite\Model\DAO\ProfessorDAO;
use IeetSite\Model\DAO\TurmaDAO;
use IeetSite\Model\Entities\Atividades;
use IeetSite\Model\Entities\Direcao;
use IeetSite\Model\Entities\Disciplina;
use IeetSite\Model\Entities\Materiais;
use IeetSite\Model\Entities\Notas;
use IeetSite\Model\Entities\Professor;
use IeetSite\Model\Entities\Turma;
use IeetSite\Model\Entities\Usuario;

class LoginController extends Controller{

    public function login(){
        $this->view("login",["titulo" => "Página de Login - Ieet"]);
    }

    public function autentica()
    {
        
        $houveErro = Validator::execute(Usuario::getLoginRegras(),$this->post());

        if($houveErro){
            addFormData($this->post());
            verificaSession(Validator::getListaErros(),'erro');
            redirecionar('login');
        }
        
        # $usuario = AdminDAO::getBy("login = ?", $this->post('login'));
        

        switch( $this->post('tipo')){
            case "1":
                $usuario = AdminDAO::getBy("login = ?",$this->post('login'));
                break;
            case "2":
                $usuario = DirecaoDAO::getBy("login = ?",$this->post('login'));
                break;
            case "3":
                $usuario = ProfessorDAO::getBy("login = ?",$this->post('login'));
                break;
            case "4":
                $usuario = AlunoDAO::getBy("login = ?",$this->post('login'));
                break;

            default:
                print 'Teste';
                die;
                break;
        }

        
        if($usuario &&  $usuario->autentica($this->post('senha'))){
            switch( $this->post()['tipo']){
                case 1:
                    redirecionar('adminMain');
                    break;
                case 2:
                    redirecionar('direcaoMain');
                    break;
                case 3:
                    redirecionar('professorMain');
                    break;
                case 4:
                    redirecionar('alunoMain');
                    break;
            }
        }else{
            addFormData($this->post());
            verificaSession('Usuário ou Senha Incorreta','erro');
            redirecionar('login');
        }
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

    public function adicionaDisciplina(){ // Mudar aqui
        $houveErro = Validator::execute(Disciplina::getRegras(), $this->post()); // Mudar aqui
        if($houveErro){
            addFormData($this->post());
            verificaSession(Validator::getListaErros(), "erro");
            redirecionar('adicionaDisciplina'); //Mudar aqui
        }

        $adicionado = new Disciplina($this->post()); // Mudar aqui
        if(DisciplinaDAO::inserir($adicionado)){ // Mudar aqui
            verificaSession(ltrim(get_class($adicionado), 'IeetSite\\Model\\Entities\\') . " {$adicionado->nome} foi cadastrado com sucesso!");
        }
        redirecionar('adicionaDisciplina'); // Mudar aqui 
    }

    public function adicionaAtividade(){ // Mudar aqui
        $houveErro = Validator::execute(Atividades::getRegras(), $this->post()); // Mudar aqui
        if($houveErro){
            addFormData($this->post());
            verificaSession(Validator::getListaErros(), "erro");
            redirecionar('turmas'); //Mudar aqui
        }
        
        

        $adicionado = new Atividades($this->post()); // Mudar aqui
        if(AtividadesDAO::inserir($adicionado)){ // Mudar aqui
            verificaSession(ltrim(get_class($adicionado), 'IeetSite\\Model\\Entities\\') . " {$adicionado->nome} foi cadastrado com sucesso!");
        }
        redirecionar('turmas'); // Mudar aqui 
    }

    public function adicionaMaterial(){ // Mudar aqui
        $houveErro = Validator::execute(Materiais::getRegras(), $this->post()); // Mudar aqui
        if($houveErro){
            addFormData($this->post());
            verificaSession(Validator::getListaErros(), "erro");
            redirecionar('turmas'); //Mudar aqui
        }

        $adicionado = new Materiais($this->post()); // Mudar aqui
        if(MateriaisDAO::inserir($adicionado)){ // Mudar aqui
            verificaSession(ltrim(get_class($adicionado), 'IeetSite\\Model\\Entities\\') . " {$adicionado->nome} foi cadastrado com sucesso!");
        }
        redirecionar('turmas'); // Mudar aqui 
    }

    public function alteraSituacao(){
        $direcao = DirecaoDAO::getById($_GET['idEscola']);
        $direcao->__set('situacao', $this->post('situacao'));
        DirecaoDAO::editar($direcao);
        redirecionar('escolaRegistros');
    }
}