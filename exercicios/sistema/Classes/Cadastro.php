<?php

    namespace Classes;

    use Config\Conexao;
    use PDO;

    class Cadastro extends Conexao {
        private $nome;
        private $telefone;
        private $email;

        protected $table = 'cadastro';

        public function inserir($value)
        {
            $stmt = $this
            ->getConnect()
            ->prepare(
                "INSERT INTO $this->table (nome, telefone, email) VALUES (?, ?, ?)"
            );
            $stmt->bindParam(1, $nome, PDO::PARAM_STR);
            $stmt->bindParam(2, $telefone, PDO::PARAM_STR);
            $stmt->bindParam(3, $email, PDO::PARAM_STR);

            $nome = $value->getNome();
            $telefone = $value->getTelefone();
            $email = $value->getEmail();

            $stmt->execute();
        }

        public function exibir()
        {
            $stmt = $this->getConnect()->query("SELECT codigo, nome, telefone, email FROM $this->table");

            return $stmt;
        }
    }

?>