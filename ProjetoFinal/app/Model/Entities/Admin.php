<?php

namespace IeetSite\Model\Entities;

class Admin{
    // ? significa que pode ser nullo
    protected ?int $id;
    protected ?string $nome;
    protected ?string $login;
    protected ?string $senha;
    protected ?int $tipo;
}