<?php

namespace IeetSite\Model\Entities;

class Atividades{
    // ? significa que pode ser nullo
    public ?int $id;
    public ?string $titulo;
    public ?string $descricao;
    public ?string $dataFinal;
    public ?string $dataInicial;
    public ?int $Disciplinas_idDisciplinas;
}