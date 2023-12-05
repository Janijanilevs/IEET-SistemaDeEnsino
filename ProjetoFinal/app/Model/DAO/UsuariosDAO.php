<?php

namespace IeetSite\Model\DAO;

use IeetSite\Core\DAO;
use IeetSite\Model\Entities\direcao;

class UsuariosDAO extends DAO{
    
    protected static string $tabela = "direcao";
    protected static string $class = Direcao::class;
}