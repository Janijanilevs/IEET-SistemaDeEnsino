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

    #-----------------------------------------------------------------------#
    
    public function teste(){
        $direcao = new Direcao();
        $direcao->nome = "Colegio municipal Vespasiano Filho";
        $direcao->email = "vespasianoFilho@gmail.com";
        $direcao->login = "vespasiano";
        $direcao->senha = "vespasiano";
        $direcao->cnpj = "40404041";
        $direcao->situacao = "pendente";

        $dao = new UsuariosDAO();
        $dao->inserir($direcao);
    }

    public function teste2(){
        $dao = new UsuariosDAO();
        $usuarios = $dao->getAll();

        foreach($usuarios as $usuario){
            print $usuario->nome;
            print "<br>";
        }
    }

    public function teste3(){
        $dao = new UsuariosDAO();
        $usuario = $dao->getById(5);
        var_dump($usuario);
    }

    public function teste4(){
        $dao = new UsuariosDAO;
        $usuario = $dao->getById(3);

        $usuario->nome = "UFBA Rio Vermelho";
        $usuario->email = "ufba@gmail.com";
        $usuario->login = "ufba";
        $usuario->senha = "ufba";
        $dao->editar($usuario);
        print "<pre>";
        var_dump($usuario);
    }

    public function teste5(){
        $dao = new UsuariosDAO;
        $usuario = $dao->getById(2);

        if($usuario){
            $dao->excluir($usuario);
            print "Usuário excluido com sucesso!";
        }else{
            print "Usuário não existe!";
        }

    }
}
