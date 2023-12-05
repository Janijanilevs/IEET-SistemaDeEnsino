<?php

namespace IeetSite\Model\Entities;

use IeetSite\Core\Entity;

class Atividades extends Entity{
    // ? significa que pode ser nullo
    protected ?int $id;
    protected ?string $nome;
    protected ?string $descricao;
    protected ?string $dataFinal;
    protected ?string $dataInicial;
    protected ?int $Disciplinas_idDisciplinas;
}