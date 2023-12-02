<?php

namespace IeetSite\Controller;

use IeetSite\Core\Controller;

class ErroController extends Controller{
    public function erro($tipo){
        switch($tipo){
            case '404':
                $this->view("404");
                break;
            case 'controller':
                $this->view('Erro', ["msg" => "Controller não existe"]);
            break;
            case 'metodo':
                $this->view('Erro', ["msg" => "O método não existe no controlador"]);
        }
        
    }
}