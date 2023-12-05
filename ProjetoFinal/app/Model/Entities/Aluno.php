<?php

namespace IeetSite\Model\Entities;

class Aluno{
    // ? significa que pode ser nullo
    protected ?int $id;
    protected ?string $nome;
    protected ?string $email;
    protected ?string $cpf;
    protected ?string $login;
    protected ?string $senha;
    protected ?int $tipo;
    protected ?string $dataDeNascimento;
    protected ?string $dataDeCriacao;
    protected ?int $Turma_idTurma;
    protected ?string $matricula;
    protected ?int $Direcao_id;

    public function setSenha($valor){
        $this->senha = password_hash($valor, PASSWORD_DEFAULT);
    }
}