<?php

namespace IeetSite\Model\Entities;

class Aluno{
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
    public ?int $Turma_idTurma;
    public ?string $matricula;
    public ?int $Direcao_id;
}