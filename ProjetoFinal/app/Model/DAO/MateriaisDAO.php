<?php

namespace IeetSite\Model\DAO;

use IeetSite\Core\DAO;
use IeetSite\Model\Entities\Materiais;

class MateriaisDAO extends DAO{
    
    protected static string $tabela = "Materiais";
    protected static string $class = Materiais::class;
}