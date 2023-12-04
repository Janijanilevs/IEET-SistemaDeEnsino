<?php

namespace IeetSite\Model\Entities;

class Direcao{
    // ? significa que pode ser nullo
    public ?int $id;
    public ?string $nome;
    public ?string $email;
    public ?string $login;
    public ?string $senha;
    public ?int $tipo;
    public ?int $Ieet_idUsuarioAdmin;
    public ?int $cnpj;
    public ?string $situacao;
}