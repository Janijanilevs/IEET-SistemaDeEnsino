<?php

namespace IeetSite\Model;

use IeetSite\Core\Database;
use PDO;

class Usuarios{
    public function cadastrarDiretor($usuario){
        $db = new Database();
        $sql = "INSERT INTO usuario_direcao(nome,email,login,senha,tipo,Ieet_idUsuarioAdmin) value(?,?,?,?,?,?)";
        var_dump($db->execute($sql, $usuario));
    }

    public function cadastrarAluno($usuario){
        $db = new Database();
        $sql = "INSERT INTO usuario_aluno(nome,email,cpf,login,senha,tipo,dataDeNascimento,dataDeCriacao,Turma_idTurma,matricula,Escola_idEscola) value(?,?,?,?,?,?,?,?,?,?,?)";
        var_dump($db->execute($sql, $usuario));
    }

    public function cadastrarProfessor($usuario){
        $db = new Database();
        $sql = "INSERT INTO usuario_professor(nome,email,cpf,login,senha,tipo,dataDeNascimento,dataDeCriacao,Turma_idTurma,matricula,Escola_idEscola,formacao) value(?,?,?,?,?,?,?,?,?,?,?,?,?)";
        var_dump($db->execute($sql, $usuario));
    }
}