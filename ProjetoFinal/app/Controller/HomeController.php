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

    public function atividadesAluno(){
        $this->view("AlunoMateriais", ["titulo" => "Ieet - Atividade e Materiais do aluno"]);
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
        $usuario = $dao->getById(4);
        var_dump($usuario);
    }

}
