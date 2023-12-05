<?php

namespace IeetSite\Model\Entities;

use IeetSite\Core\Entity;

class Notas extends Entity{
    // ? significa que pode ser nullo
    protected ?int $id;
    protected ?float $nota1_1;
    protected ?float $nota1_2;
    protected ?float $nota1_3;
    protected ?float $nota2_1;
    protected ?float $nota2_2;
    protected ?float $nota2_3;
    protected ?float $nota3_1;
    protected ?float $nota3_2;
    protected ?float $nota3_3;
    protected ?int $status;
    protected ?int $Disciplinas_idDisciplinas;
    protected ?int $Turma_idTurma;

    
}