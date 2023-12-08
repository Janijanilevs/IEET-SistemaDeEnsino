<?php 

namespace IeetSite\Controller;

use IeetSite\Core\Controller;
use IeetSite\Core\Database;
use IeetSite\Model\DAO\UsuariosDAO;
use IeetSite\Model\Entities\Direcao;

class HomeController extends Controller{
    public function index(){
        $this->view("inicial",["titulo" => "Ieet Sistema de Ensino" ]);
    }

    public function mainDirecao(){
        $this->view("direcaoMain", ["titulo" => "Ieet Sistema de Ensino"]);
    }

    public function mainAluno(){
        $this->view("alunoMain", ["titulo" => "Ieet Sistema de Ensino"]);
    }

    public function confirmacao(){
        $this->view("confirmacao", ["titulo" => "Ieet Sistema de Ensino"]);
    }

    public function alunoBoletim(){
        $this->view("alunoBoletim", ["titulo" => "Ieet Sistema de Ensino"]);
    }

    public function atividadesAluno(){
        $this->view("AlunoMateriais", ["titulo" => "Ieet - Atividade e Materiais do aluno"]);
    }

    public function mainProfessor(){
        $this->view("professorMain", ["titulo" => "Ieet - Atividade e Materiais do aluno"]);
    }

    public function adcAluno(){
        $this->view("adicionarAluno", ["titulo" => "Ieet - Adicionar aluno"]);
    }

    public function turmaAlunos(){
        $this->view("turmaAlunos", ["titulo" => "Ieet - Adicionar aluno"]);
    }

    public function turmas(){
        $this->view("turmas", ["titulo" => "Ieet - Adicionar aluno"]);
    }

    public function inserirNotas(){
        $this->view("inserirNotas", ["titulo" => "Ieet - Adicionar aluno"]);
    }

    public function inserirAtividades(){
        $this->view("inserirAtividades", ["titulo" => "Ieet - Adicionar aluno"]);
    }

    public function verificaAtividade(){
        $this->view("verificaAtividade", ["titulo" => "Ieet - Adicionar aluno"]);
    }

    public function adicionaProfessor(){
        $this->view("adicionaProfessor", ["titulo" => "Ieet - Adicionar aluno"]);
    }

    public function adicionaTurma(){
        $this->view("adicionaTurma", ["titulo" => "Ieet - Adicionar aluno"]);
    }

    public function dadosrequisicao(){
        $this->view("dadosrequisicao", ["titulo" => "Ieet - Adicionar aluno"]);
    }

    public function adminMain(){
        $this->view("adminMain", ["titulo" => "Ieet - Adicionar aluno"]);
    }

    public function adicionaDirecao(){
        $this->view("adicionaDirecao", ["titulo" => "Ieet - Adicionar aluno"]);
    }

    public function situacaoPag(){
        $this->view("situacaoPag", ["titulo" => "Ieet - Adicionar aluno"]);
    }

    public function escolaRegistros(){
        $this->view("escolaRegistros", ["titulo" => "Ieet - Adicionar aluno"]);
    }

    public function direcaoMainVerdadeiro(){
        $this->view("direcaoMainVerdadeiro", ["titulo" => "Ieet - Adicionar aluno"]);
    }
    
    public function sobreNos(){
        $this->view("sobrenos");
    }
    
    #-----------------------------------------------------------------------#
    
}
