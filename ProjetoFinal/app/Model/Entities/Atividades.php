<?php

namespace IeetSite\Model\Entities;

class Atividades{
    // ? significa que pode ser nullo
    protected ?int $id;
    protected ?string $titulo;
    protected ?string $descricao;
    protected ?string $dataFinal;
    protected ?string $dataInicial;
    protected ?int $Disciplinas_idDisciplinas;
}