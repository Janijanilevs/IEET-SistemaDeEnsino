<?php

namespace IeetSite\Model\Entities;

class Materiais{
    // ? significa que pode ser nullo
    public ?int $id;
    public ?string $link;
    public ?string $nome;
    public ?string $descricao;
    public ?int $disciplina_id;
}