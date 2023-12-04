<?php

namespace IeetSite\Core;

class Database{
    protected \PDO $conexao;
    protected \PDOStatement $stmt;

    public function __construct(){
        $servidor = BD['servidor'];
        $banco = BD['banco'];
        $usuario = BD['usuario'];
        $senha = BD['senha'];

        $dsn = "mysql:host={$servidor};dbname={$banco}";
        $this->conexao = new \PDO($dsn, $usuario, $senha);

    }

    public function execute(string $sql, array $dados = []): bool{
        $this->stmt = $this->conexao->prepare($sql);
        return $this->stmt->execute($dados);
    }
}