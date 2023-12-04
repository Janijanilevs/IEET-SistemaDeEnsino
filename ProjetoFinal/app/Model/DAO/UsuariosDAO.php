<?php

namespace IeetSite\Model\DAO;

use IeetSite\Core\Database;
use IeetSite\Model\Entities\Direcao;
use PDO;
/* Criar um default para cada usuario:
    Admin tipo 1: não precisa só tem uma adm
    Diretor tipo 2
    Professor tipo 3
    Aluno tipo 4 */ 
class UsuariosDAO{
    public function cadastrarDiretor(Direcao $direcao){
        $db = new Database();
        $sql = "INSERT INTO usuario_direcao(nome,email,login,senha,tipo,Ieet_idUsuarioAdmin) value(?,?,?,?,?,?)";

        $dados = [
            $direcao->nome,
            $direcao->email,
            $direcao->login,
            $direcao->senha,
            $direcao->tipo,
            $direcao->ieet_idUsuarioAdmin = 123456789
        ];
        
        var_dump($db->execute($sql, $dados));
        
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