<?php

namespace IeetSite\Controller;

use IeetSite\Core\Controller;
use IeetSite\Model\DAO\UsuariosDao;

class TesteController extends Controller{
    public function teste(){
        $direcao = new Direcao();
        $direcao->nome = "Colegio municipal Vespasiano Filho";
        $direcao->email = "vespasianoFilho@gmail.com";
        $direcao->login = "vespasiano";
        $direcao->senha = "vespasiano";
        $direcao->cnpj = "40404041";
        $direcao->situacao = "pendente";

        UsuariosDAO::inserir($direcao);
    }

    public function teste2(){
        $usuarios = UsuariosDAO::getAll();

        foreach($usuarios as $usuario){
            print $usuario->nome;
            print "<br>";
        }
    }

    public function teste3(){
        $usuario = UsuariosDAO::getById(5);
        var_dump($usuario);
    }

    public function teste4(){
        $usuario = UsuariosDAO::getById(3);

        $usuario->nome = "zzHenry school";
        $usuario->email = "zzhenryz@gmail.com";
        $usuario->login = "henry";
        $usuario->senha = "henry";
        UsuariosDAO::editar($usuario);
        print "<pre>";
        var_dump($usuario);
    }

    public function teste5(){
        $usuario = UsuariosDAO::getById(2);

        if($usuario){
            UsuariosDAO::excluir($usuario);
            print "Usuário excluido com sucesso!";
        }else{
            print "Usuário não existe!";
        }

    }

    public function teste6(){
        $direcao = new Direcao(['nome' => 'IFBA - Campus Guajeru', 'email' => 'guajeruIfba@gmail.com', 'login' => 'ifbaGuajeru','senha' => 'ifbaGuajeru', 'cnpj' => '40404042', 'situacao' => 'pendente']);
        print "<pre>";
        var_dump($direcao->getProps());
    }
}