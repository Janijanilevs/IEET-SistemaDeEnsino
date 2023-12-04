<?php

namespace IeetSite\Core;

abstract class DAO{
    protected static string $tabela = "";
    protected static string $class = \stdClass::class;
    
    public function getAll(){
        $db = new Database();
        $sql = "SELECT * from {static::$tabela}";
        $db->execute($sql);

        return $db->recuperaTabela(static::$class);
    }

    public function getById($id, $tipo){
        $db = new Database;
        
        $sql = //$this->recuperaTipo($tipo);
        
        $db->execute($sql, [ $id ]);
        
    }
}