<?php 

namespace IeetSite\Controller;

use IeetSite\Core\Controller;
use IeetSite\Model\Usuarios;

class HomeController extends Controller{
    public function index(){
        $this->view("inicial",["titulo" => "Ieet Sistema de Ensino" ]);
    }

    public function teste(){
        $usuarios = new Usuarios();
        $usuarios->cadastrarDiretor([]);
    }
    
}
