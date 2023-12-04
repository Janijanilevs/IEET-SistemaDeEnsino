<?php

namespace IeetSite\Model\Entities;

class Admin{
    // ? significa que pode ser nullo
    public ?int $id;
    public ?string $nome;
    public ?string $login;
    public ?string $senha;
    public ?int $tipo;
}