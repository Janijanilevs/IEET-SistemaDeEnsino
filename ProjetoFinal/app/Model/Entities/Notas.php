<?php

namespace IeetSite\Model\Entities;

class Notas{
    // ? significa que pode ser nullo
    public ?int $id;
    public ?float $nota1_1;
    public ?float $nota1_2;
    public ?float $nota1_3;
    public ?float $nota2_1;
    public ?float $nota2_2;
    public ?float $nota2_3;
    public ?float $nota3_1;
    public ?float $nota3_2;
    public ?float $nota3_3;
    public ?int $status;
    public ?int $Disciplinas_idDisciplinas;
    public ?int $Turma_idTurma;
}