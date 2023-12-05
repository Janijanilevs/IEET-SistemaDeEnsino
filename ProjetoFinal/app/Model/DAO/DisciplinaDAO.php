<?php

namespace IeetSite\Model\DAO;

use IeetSite\Core\DAO;
use IeetSite\Model\Entities\Disciplinas;

class DisciplinasDAO extends DAO{
    
    protected static string $tabela = "disciplinas";
    protected static string $class = Disciplicas::class;
}