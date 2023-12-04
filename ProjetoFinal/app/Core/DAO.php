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
        
        /* 
        switch($tipo){
            case 1:
                return $db->recuperaUsuario(Admin::class);
                break;
            case 2:
                return $db->recuperaUsuario(Direcao::class);
                break;
            case 3:
                return $db->recuperaUsuario(Professor::class);
                break;
            case 4:
                return $db->recuperaUsuario(Aluno::class);
                break;
            default:
                return $db->recuperaUsuario(Admin::class);
                break;
        }*/
    }

    public function recuperaTipo($tipo): string {
        switch($tipo){
            case 1:
                return "SELECT * FROM {static::$tabela} where idUsuarioAdmin = ?";
                break;
            case 2:
                return "SELECT * FROM usuario_direcao where idUsuarioDirecao = ?";
                break;
            case 3:
                return "SELECT * FROM usuario_professor where idUsuarioProfessor = ?";
                break;
            case 4:
                return "SELECT * FROM usuario_aluno where idUsuarioAluno = ?";
                break;
            default:
                return "SELECT * FROM ieet where idUsuarioAdmin = ?";
                break;
        }
    }
}