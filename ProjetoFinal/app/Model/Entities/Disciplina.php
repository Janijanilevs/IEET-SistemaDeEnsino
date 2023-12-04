<?php

namespace IeetSite\Model\Entities;

class Disciplina{
    // ? significa que pode ser nullo
    public ?int $id;
    public ?string $nome;
    public ?int $Turma_idTurma;
    public ?string $carga_Horaria;
    public ?int $usuario_professor_id;
}