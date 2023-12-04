<?php 

namespace IeetSite\Controller;

use IeetSite\Core\Controller;
use IeetSite\Model\DAO\UsuariosDAO;
use IeetSite\Model\Entities\Direcao;

class HomeController extends Controller{
    public function index(){
        $this->view("inicial",["titulo" => "Ieet Sistema de Ensino" ]);
    }

    public function teste(){
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
    
}
