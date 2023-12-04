<?php

namespace IeetSite\Model\DAO;

use IeetSite\Core\DAO;
use IeetSite\Core\Database;
use IeetSite\Model\Entities\Direcao;
use PDO;

class UsuariosDAO extends DAO{
    
    protected string $tabela = "direcao";
    protected string $class = Direcao::class;
    
    
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

    

    

    public function editar($usuario){
        $db = new Database;
        $sql = "UPDATE direcao Set Nome = ?, email = ?, login = ?, senha = ?, cnpj = ?, situacao = ?";

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
    
}