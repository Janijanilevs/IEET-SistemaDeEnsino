<?php 

namespace IeetSite\Controller;

use IeetSite\Core\Controller;
use IeetSite\Core\Database;
use IeetSite\Model\DAO\UsuariosDAO;
use IeetSite\Model\Entities\Direcao;

class HomeController extends Controller{
    public function index(){
        $this->view("inicial",["titulo" => "Ieet Sistema de Ensino" ]);
    }

    public function mainDirecao(){
        $this->view("direcaoMain", ["titulo" => "Ieet Sistema de Ensino"]);
    }

    public function mainAluno(){
        $this->view("alunoMain", ["titulo" => "Ieet Sistema de Ensino"]);
    }

    public function confirmacao(){
        $this->view("confirmacao", ["titulo" => "Ieet Sistema de Ensino"]);
    }

    public function alunoBoletim(){
        $this->view("alunoBoletim", ["titulo" => "Ieet Sistema de Ensino"]);
    }

    public function atividadesAluno(){
        $this->view("AlunoMateriais", ["titulo" => "Ieet - Atividade e Materiais do aluno"]);
    }

    public function mainProfessor(){
        $this->view("professorMain", ["titulo" => "Ieet - Atividade e Materiais do aluno"]);
    }

    public function adcAluno(){
        $this->view("adicionarAluno", ["titulo" => "Ieet - Adicionar aluno"]);
    }

    public function turmaAlunos(){
        $this->view("turmaAlunos", ["titulo" => "Ieet - Adicionar aluno"]);
    }

    public function turmas(){
        $this->view("turmas", ["titulo" => "Ieet - Adicionar aluno"]);
    }

    public function inserirNotas(){
        $this->view("inserirNotas", ["titulo" => "Ieet - Adicionar aluno"]);
    }

    public function inserirAtividades(){
        $this->view("inserirAtividades", ["titulo" => "Ieet - Adicionar aluno"]);
    }

    public function verificaAtividade(){
        $this->view("verificaAtividade", ["titulo" => "Ieet - Adicionar aluno"]);
    }

    public function adicionaProfessor(){
        $this->view("adicionaProfessor", ["titulo" => "Ieet - Adicionar aluno"]);
    }

    public function adicionaTurma(){
        $this->view("adicionaTurma", ["titulo" => "Ieet - Adicionar aluno"]);
    }

    #-----------------------------------------------------------------------#
    
    public function teste(){
        $direcao = new Direcao();
        $direcao->nome = "Colegio municipal Vespasiano Filho";
        $direcao->email = "vespasianoFilho@gmail.com";
        $direcao->login = "vespasiano";
        $direcao->senha = "vespasiano";
        $direcao->cnpj = "40404041";
        $direcao->situacao = "pendente";

        UsuariosDAO::inserir($direcao);
    }

    public function teste2(){
        $usuarios = UsuariosDAO::getAll();

        foreach($usuarios as $usuario){
            print $usuario->nome;
            print "<br>";
        }
    }

    public function teste3(){
        $usuario = UsuariosDAO::getById(5);
        var_dump($usuario);
    }

    public function teste4(){
        $usuario = UsuariosDAO::getById(3);

        $usuario->nome = "UFBA Rio Vermelho";
        $usuario->email = "ufba@gmail.com";
        $usuario->login = "ufba";
        $usuario->senha = "ufba";
        UsuariosDAO::editar($usuario);
        print "<pre>";
        var_dump($usuario);
    }

    public function teste5(){
        $usuario = UsuariosDAO::getById(2);

        if($usuario){
            UsuariosDAO::excluir($usuario);
            print "Usuário excluido com sucesso!";
        }else{
            print "Usuário não existe!";
        }

    }

    public function teste6(){
        $direcao = new Direcao(['nome' => 'IFBA - Campus Guajeru', 'email' => 'guajeruIfba@gmail.com', 'login' => 'ifbaGuajeru','senha' => 'ifbaGuajeru', 'cnpj' => '40404042', 'situacao' => 'pendente']);
        print "<pre>";
        var_dump($direcao->getProps());
    }
}
