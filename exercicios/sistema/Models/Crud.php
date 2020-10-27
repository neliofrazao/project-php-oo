<?php

    namespace Models;

    use Config\Conexao;
    
    abstract Class Crud extends Conexao
    {
         /**
         * @var string
         */
        protected $table;

        /**
         * Método abstrato para insert de registro para as classes filhas
         *
         * @author Nélio Frazão <neliofrazac@gmail.com>
         * @param $value
         * @return mixed
         */
        abstract public function inserir($value);

        /**
         * Método para exibir todos os dados da tabela
         *
         * @author Nélio Frazão <neliofrazac@gmail.com>
         * @return array
         */
        public function exibir()
        {
            $stmt = $this->getConnect()->query("SELECT * FROM $this->table");

            return $stmt;
        }

    }

?>