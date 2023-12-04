<?php

namespace IeetSite\Model\Entities;

class Professor{
    // ? significa que pode ser nullo
    public ?int $idUsuarioProfessor;
    public ?string $nome;
    public ?string $email;
    public ?string $cpf;
    public ?string $login;
    public ?string $senha;
    public ?string $dataDeNascimento;
    public ?string $dataDeCriacao;
    public ?string $Disciplinas_idDisciplinas;
    public ?string $matricula;
    public ?string $Escola_idEscola;
    public ?string $formacao;
    public ?int $tipo;
    public ?int $ieet_idUsuarioAdmin;
}