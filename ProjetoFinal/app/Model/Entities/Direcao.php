<?php

namespace IeetSite\Model\Entities;

use IeetSite\Core\Entity;

class Direcao extends Entity{
    // ? significa que pode ser nullo
    protected ?int $id;
    protected ?string $nome;
    protected ?string $email;
    protected ?string $login;
    protected ?string $senha;
    protected ?int $tipo;
    protected ?int $Ieet_idUsuarioAdmin;
    protected ?int $cnpj;
    protected ?string $situacao;

    public function setSenha($valor){
        $this->senha = password_hash($valor, PASSWORD_DEFAULT);
    }
}