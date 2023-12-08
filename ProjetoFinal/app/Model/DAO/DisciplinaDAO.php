<?php

namespace IeetSite\Model\DAO;

use IeetSite\Core\DAO;
use IeetSite\Model\Entities\Disciplina;

class DisciplinaDAO extends DAO{
    
    protected static string $tabela = "disciplinas";
    protected static string $class = Disciplina::class;
}