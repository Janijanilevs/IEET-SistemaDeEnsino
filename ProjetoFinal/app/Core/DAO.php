<?php

namespace IeetSite\Core;



abstract class DAO{
    protected static string $tabela = "";
    protected static string $class = \stdClass::class;
    
    public static function inserir(Entity $entidade){
        $db = new Database();
        $tabela = static::$tabela;
        
        $sql = "INSERT INTO {$tabela}";

        $campos = [];
        $coringas = [];
        $dados = [];
        $propriedades = $entidade->getProps();

        foreach($propriedades as $propriedade => $valor){
            if(!is_null($entidade->$propriedade)){

                array_push($campos, $propriedade);
                array_push($dados, $valor);
                array_push($coringas, "?");
            }
        }

        $campos = implode(',',$campos);
        $coringas = implode(',', $coringas);
        $sql .= "({$campos}) Values ({$coringas})";

        return $db->execute($sql, $dados);
    }

    public static function editar($entidade){
        $db = new Database;
        $tabela = static::$tabela;
        
        $sql = "UPDATE {$tabela} Set";

        $propriedades = $entidade->getProps();
        $dados = [];
        $campos = "";

        foreach($propriedades as $propriedade => $valor){
            if($propriedade != 'id' && !is_null($entidade->$propriedade)){
                $campos .= " {$propriedade} = ?,";
                array_push($dados, $valor);
            }
        }
        $campos = rtrim($campos, ',');
        $sql .= "{$campos} WHERE id = ?";
        array_push($dados, $entidade->id);

        print $sql;
   
        return $db->execute($sql, $dados);
    }
    
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

    public static function excluir(Entity $entidade){
        $db = new Database;
        $tabela = static::$tabela;
        $sql = "DELETE From {$tabela} where id = ?";

        return $db->execute($sql, [$entidade->id]);
    }

    public static function getBy(string $where,...$valores)
    {
        $db = new Database;
        $tabela = static::$tabela;
        $sql = "SELECT * FROM {$tabela} WHERE $where LIMIT 1";
        
        $db->execute($sql,$valores);
        
        return $db->get(static::$class);
    }
    
}