<?php 

namespace IeetSite\Controller;

use IeetSite\Core\Controller;
use IeetSite\Model\DAO\UsuariosDAO;
use IeetSite\Model\Usuario;
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

    #-----------------------------------------------------------------------#
    
    public function teste(){
        $usuario = new Usuario();
        $sql = "INSERT INTO Direcao(nome, email, login, senha, cnpj, situacao) Values(?,?,?,?,?,?)";
        $valores = ["IFBA - CAMPUS BRUMADO", "ifbaBrumas@ifba.edu.br", "brumado", "brumado", "40404040", "Pago"];

        var_dump($usuario->execute($sql, $valores));
    }

}
