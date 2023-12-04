<?php

namespace IeetSite\Model\Entities;

class Professor{
    // ? significa que pode ser nullo
    public ?int $id;
    public ?string $nome;
    public ?string $email;
    public ?string $cpf;
    public ?string $login;
    public ?string $senha;
    public ?int $tipo;
    public ?string $dataDeNascimento;
    public ?string $dataDeCriacao;
    public ?string $matricula;
    public ?string $formacao;
    public ?int $Direcao_id;
}