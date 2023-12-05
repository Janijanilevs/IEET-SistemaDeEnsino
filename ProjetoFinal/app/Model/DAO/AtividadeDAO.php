<?php

namespace IeetSite\Model\DAO;

use IeetSite\Core\DAO;
use IeetSite\Model\Entities\Atividades;

class AtividadesDAO extends DAO{
    
    protected static string $tabela = "atividade";
    protected static string $class = Atividades::class;
}