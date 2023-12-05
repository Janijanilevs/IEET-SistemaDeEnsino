<?php

namespace IeetSite\Model\Entities;

use IeetSite\Core\Entity;

class Materiais extends Entity{
    // ? significa que pode ser nullo
    protected ?int $id;
    protected ?string $link;
    protected ?string $nome;
    protected ?string $descricao;
    protected ?int $disciplina_id;

    public static function getRegras(){
        return[
            'nome' => 'obrigatorio ',
             'link' => 'obrigatorio ',
             'descricao' => 'obrigatorio ',
             'Disciplinas_idDisciplinas' => 'obrigatorio '
            ];
    }
}