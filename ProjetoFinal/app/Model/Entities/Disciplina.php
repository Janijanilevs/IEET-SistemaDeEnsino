<?php

namespace IeetSite\Model\Entities;

class Disciplina{
    // ? significa que pode ser nullo
    protected ?int $id;
    protected ?string $nome;
    protected ?int $Turma_idTurma;
    protected ?string $carga_Horaria;
    protected ?int $usuario_professor_id;
}