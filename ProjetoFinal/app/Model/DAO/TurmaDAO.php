<?php

namespace IeetSite\Model\DAO;

use IeetSite\Core\DAO;
use IeetSite\Model\Entities\turma;

class TurmaDAO extends DAO{
    
    protected static string $tabela = "turma";
    protected static string $class = Turma::class;
}