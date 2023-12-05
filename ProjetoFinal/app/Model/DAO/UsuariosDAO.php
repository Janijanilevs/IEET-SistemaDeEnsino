<?php

namespace IeetSite\Model\DAO;

use IeetSite\Core\DAO;
use IeetSite\Core\Database;
use IeetSite\Model\Entities\Direcao;
use PDO;

class UsuariosDAO extends DAO{
    
    protected static string $tabela = "direcao";
    protected static string $class = Direcao::class;
    
    
    public static function inserir($usuario){
        /* Este inserir só funciona para diretores, se thiago não ensinar alguma forma de modificar teremos que fazer varios inserir'' */
        $db = new Database();
        $tabela = static::$tabela;
        $sql = "INSERT INTO $tabela(nome, email, login, senha, cnpj, situacao) Values(?,?,?,?,?,?)";
        
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



    

    public static function editar($usuario){
        $db = new Database;
        $tabela = static::$tabela;
        $sql = "UPDATE $tabela Set Nome = ?, email = ?, login = ?, senha = ?, cnpj = ?, situacao = ?";

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