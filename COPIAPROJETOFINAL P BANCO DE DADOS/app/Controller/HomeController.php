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

    #-----------------------------------------------------------------------#
    
}
