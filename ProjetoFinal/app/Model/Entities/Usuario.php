<?php

namespace IeetSite\Model\Entities;

use IeetSite\Core\Entity;

class Usuario extends Entity{
    // ? significa que pode ser nullo
    protected ?int $id;
    protected ?string $login;
    protected ?string $senha;
    protected ?int $tipo;

    public function setSenha($valor){
        $this->senha = password_hash($valor, PASSWORD_DEFAULT);
    }

    public static function getLoginRegras(): array{
        return [
            'login' => 'obrigatorio',
            'senha' => 'obrigatorio',
            'tipo' => 'obrigatorio'
         ];
    }

    
}