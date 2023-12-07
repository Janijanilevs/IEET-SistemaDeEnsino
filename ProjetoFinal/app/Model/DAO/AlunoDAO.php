<?php

namespace IeetSite\Model\DAO;

use IeetSite\Core\DAO;
use IeetSite\Model\Entities\Aluno;

class AlunoDAO extends DAO{
    
    protected static string $tabela = "usuario_aluno";
    protected static string $class = Aluno::class;
}