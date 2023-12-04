<?php

namespace IeetSite\Model\Entities;

class Direcao{
    // ? significa que pode ser nullo
    public ?int $idUsuarioDirecao;
    public ?string $nome;
    public ?string $email;
    public ?string $login;
    public ?string $senha;
    public ?int $tipo;
    public ?int $ieet_idUsuarioAdmin;
}