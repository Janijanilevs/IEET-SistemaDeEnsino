<?php

namespace IeetSite\Model\DAO;

use IeetSite\Core\DAO;
use IeetSite\Model\Entities\Admin;

class AdminDAO extends DAO{
    
    protected static string $tabela = "IeetAdmin";
    protected static string $class = Admin::class;
}