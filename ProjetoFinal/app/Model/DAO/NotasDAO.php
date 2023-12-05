<?php

namespace IeetSite\Model\DAO;

use IeetSite\Core\DAO;
use IeetSite\Model\Entities\Notas;

class NotasDAO extends DAO{
    
    protected static string $tabela = "notas";
    protected static string $class = Notas::class;
}