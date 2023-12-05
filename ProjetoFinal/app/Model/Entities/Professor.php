<?php

namespace IeetSite\Model\Entities;

class Professor{
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
    protected ?string $matricula;
    protected ?string $formacao;
    protected ?int $Direcao_id;

    public function setSenha($valor){
        $this->senha = password_hash($valor, PASSWORD_DEFAULT);
    }
}