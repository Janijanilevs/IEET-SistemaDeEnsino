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
                $this->view('Erro', ["msg" => "Erro! Controller não existe"]);
            break;
            case 'metodo':
                $this->view('Erro', ["msg" => "Erro! O método não existe no controlador"]);
            break;
            case 'failOperacao':
                $this->view('Erro', ["msg" => "Essa operação falhou!"]);
            break;
        }
        
    }
}