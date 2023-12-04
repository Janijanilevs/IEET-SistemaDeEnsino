<?php

namespace IeetSite\Model\DAO;

use IeetSite\Core\DAO;
use IeetSite\Core\Database;
use IeetSite\Model\Entities\Direcao;
use PDO;

class UsuariosDAO extends DAO{

    protected string $tabela = "usuario_direcao";
    protected string $class = Direcao::class;

    
    
    public function editarUsuario($usuario, $tipo){
        $db = new Database();
    }
    

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

        return var_dump($db->execute($sql, $dados)); // Isso retorna true ou false para a inserção de alguem na tabela, podemos usar isso para criar uma tela de confirmação ou erro.
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