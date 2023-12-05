<?php

namespace IeetSite\Model\Entities;

use IeetSite\Core\Entity;

class Admin extends Entity{
    // ? significa que pode ser nullo
    protected ?int $id;
    protected ?string $nome;
    protected ?string $login;
    protected ?string $senha;
    protected ?int $tipo;
}