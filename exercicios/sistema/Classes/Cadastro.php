<?php

    namespace Classes;

    use Config\Conexao;

    class Cadastro extends Conexao {
        private $nome;
        private $telefone;
        private $email;

        /**
         * Get the value of nome
         */ 
        public function getNome()
        {
            return $this->nome;
        }

        /**
         * Set the value of nome
         *
         * @return  self
         */ 
        public function setNome($nome)
        {
            $this->nome = $nome;

            return $this;
        }

        /**
         * Get the value of telefone
         */ 
        public function getTelefone()
        {
            return $this->telefone;
        }

        /**
         * Set the value of telefone
         *
         * @return  self
         */ 
        public function setTelefone($telefone)
        {
            $this->telefone = $telefone;

            return $this;
        }

        /**
         * Get the value of email
         */ 
        public function getEmail()
        {
            return $this->email;
        }

        /**
         * Set the value of email
         *
         * @return  self
         */ 
        public function setEmail($email)
        {
            $this->email = $email;

            return $this;
        }


        public function exibir()
        {
            $stmt = $this->getConnect()->query("SELECT codigo, nome, telefone, email FROM cadastro");

            return $stmt;
        }
    }

?>