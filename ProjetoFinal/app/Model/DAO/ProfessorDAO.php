<?php

namespace IeetSite\Model\DAO;

use IeetSite\Core\DAO;
use IeetSite\Model\Entities\Professor;

class ProfessorDAO extends DAO{
    
    protected static string $tabela = "usuario_professor";
    protected static string $class = Professor::class;
}