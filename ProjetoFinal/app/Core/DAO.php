<?php

namespace IeetSite\Core;

abstract class DAO{
    protected string $tabela = "";
    protected string $class = \stdClass::class;
    
    public function getAll(){
        $db = new Database();
        $sql = "SELECT * FROM  $this->tabela";
        $db->execute($sql);

        return $db->getAll($this->class);
    }

    public function getById($id){
        $db = new Database();
        $sql = "SELECT * from {$this->tabela} where id = ?";
        $db->execute($sql, [$id]);
        print "<pre>";
        return $db->get($this->class);
    }

    public function excluir( $usuario){
        $db = new Database;
        $sql = "DELETE From {$this->tabela} where id = ?";

        return $db->execute($sql, [$usuario->id]);
    }

    
}