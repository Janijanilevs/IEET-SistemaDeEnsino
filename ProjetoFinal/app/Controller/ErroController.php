<?php

namespace IeetSite\Controller;

use IeetSite\Core\Controller;

class ErroController extends Controller{

    public function erro404(){
        $this->view("erro");
        print "Erro 404 - Página não encontrada! :(";
    }
}