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
    public function getAll(){
        $db = new Database();
        $sql = "SELECT * from usuario_direcao";
        $db->execute($sql);
        return $db->recuperaTabela(Direcao::class);
    }

    public function getById($id, $tipo){
        $db = new Database;

        $sql = $this->recuperaTipo($tipo);
        
        $db->execute($sql, [ $id ]);
        
        
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
        }
    }
    
    public function editarUsuario($usuario, $tipo){
        $db = new Database();

        switch($tipo){
            case 1:
                print "Não é possível atualizar um ADM";
                break;
            case 2:
                $sql = "UPDATE ieet SET nome = ?, login = ?, senha = ?";
                break;
            case 3:
                
                break;
            case 4:
                
                break;
            default:
                
                break;
        }

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

    public function recuperaTipo($tipo): string {
        switch($tipo){
            case 1:
                return "SELECT * FROM ieet where idUsuarioAdmin = ?";
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