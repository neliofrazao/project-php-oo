<?php

    namespace Models;

    use Models\Crud;
    use Entity\Cadastro;
    use PDO;

    class CadastroModel extends Crud {

        protected $table = 'cadastro';

        /**
         * Método de inserção de registro na tabela cadastro passando um objeto como parametro
         *
         * @author Nélio Frazão <neliofrazac@gmail.com>
         * @param Cadastro $value
         * @return boolean
         */
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
        
    }

?>