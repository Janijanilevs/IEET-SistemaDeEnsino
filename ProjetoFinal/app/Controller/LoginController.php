<?php 

namespace IeetSite\Controller;

use IeetSite\Core\Controller;

class LoginController extends Controller{

    public function login(){
        $this->view("login");
    }

    public function cadastro(){
        $this->view("cadastro");
    }


}