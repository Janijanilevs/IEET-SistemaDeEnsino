<?php

namespace IeetSite\Model\DAO;

use IeetSite\Core\DAO;
use IeetSite\Model\Entities\Alunos;

class AlunoDAO extends DAO{
    
    protected static string $tabela = "usuario_aluno";
    protected static string $class = Alunos::class;
}