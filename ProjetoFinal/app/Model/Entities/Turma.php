<?php

namespace IeetSite\Model\Entities;

use IeetSite\Core\Entity;

class Turma extends Entity{
    // ? significa que pode ser nullo
    protected ?int $id;
    protected ?string $nome;
    protected ?int $Direcao_id;
}