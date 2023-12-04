<?php 

namespace IeetSite\Controller;

use IeetSite\Core\Controller;

class LoginController extends Controller{

    public function login(){
        $this->view("login",["titulo" => "Página de Login - Ieet"]);
    }

    public function cadastro(){
        $this->view("cadastro",["titulo" => "Página de Cadastro - Ieet"]);
    }


}