<?php

namespace IeetSite\Core;

abstract class DAO{
    protected static string $tabela = "";
    protected static string $class = \stdClass::class;
    
    public abstract static function inserir($entidade);
    public abstract static function editar($entidade);
    
    public static function getAll(){
        $db = new Database();
        $tabela = static::$tabela;
        $sql = "SELECT * FROM  {$tabela}";
        $db->execute($sql);

        return $db->getAll(static::$class);
    }

    public static function getById($id){
        $db = new Database();
        $tabela = static::$tabela;
        $sql = "SELECT * from {$tabela} where id = ?";
        $db->execute($sql, [$id]);
        print "<pre>";
        return $db->get(static::$class);
    }

    public static function excluir( $usuario){
        $db = new Database;
        $tabela = static::$tabela;
        $sql = "DELETE From {$tabela} where id = ?";

        return $db->execute($sql, [$usuario->id]);
    }

    
}