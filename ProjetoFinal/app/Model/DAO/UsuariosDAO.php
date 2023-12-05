<?php

namespace IeetSite\Model\DAO;

use IeetSite\Core\DAO;
use IeetSite\Core\Database;
use IeetSite\Model\Entities\Direcao;
use IeetSite\Core\Entity;
use PDO;

class UsuariosDAO extends DAO{
    
    protected static string $tabela = "direcao";
    protected static string $class = Direcao::class;

    public static function editar($usuario){
        $db = new Database;
        $tabela = static::$tabela;
        
        $sql = 

        return $db->execute($sql, $dados);
    }
    
}