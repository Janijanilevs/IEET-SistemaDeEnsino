<?php

namespace IeetSite\Model\DAO;

use IeetSite\Core\DAO;
use IeetSite\Core\Database;
use IeetSite\Model\Entities\Direcao;
use PDO;

class UsuariosDAO extends DAO{
    /*
    protected string $tabela = "usuario_direcao";
    protected string $class = Direcao::class;
    */
    
    public function inserir($usuario){
        $db = new Database();
        $sql = "INSERT INTO Direcao(nome, email, login, senha, cnpj, situacao) Values(?,?,?,?,?,?)";
        
        $dados = [
            $usuario->nome,
            $usuario->email,
            $usuario->login,
            $usuario->senha,
            $usuario->cnpj,
            $usuario->situacao
        ];

        return $db->execute($sql, $dados);
    }

    public function getAll(){
        $db = new Database;
        $sql = "SELECT * from Direcao";
        $db->execute($sql);
        return $db->getAll(Direcao::class);
    }

    public function getById($id){
        $db = new Database();
        $sql = "SELECT * from direcao where id = ?";
        $db->execute($sql, [$id]);

        return $db->get(Direcao::class);
    }
}