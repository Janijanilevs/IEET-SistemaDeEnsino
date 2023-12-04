<?php 

namespace IeetSite\Controller;

use IeetSite\Core\Controller;
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

    

    public function insereDiretor(){
        $direcao = new Direcao();
        $direcao->nome = "vascao";
        $direcao->email = "vascao@ifba.edu.br";
        $direcao->login = "vascao";
        $direcao->senha = "vascao";
        $direcao->tipo = 2;
        $direcao->ieet_idUsuarioAdmin = 123456789;

        $dao = new UsuariosDAO();
        $dao->cadastrarDiretor($direcao);
    }

    public function getAll(){
        $dao = new UsuariosDAO();
        $consulta = ($dao->getAll());
        
        foreach($consulta as $usuarios){
            print $usuarios->nome;
            print "<hr>";
        }
    }
    
    public function recuperaByIdETipo(){
        $dao = new UsuariosDAO();
        $usuarios = $dao->getById(123456789, 2); // Não está funcionando ainda para Admin, professor e aluno ver depois, está funcionando somente com diretor.
        print "<pre>";
        var_dump($usuarios);
    }

}
