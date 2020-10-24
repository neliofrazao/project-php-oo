<?php

    class Programador extends Funcionario 
    {
        private $linguagem;

        public function __construct($nome, $salario, $linguagem)
        {
            parent::__construct($nome, $salario, $linguagem);
            $this->linguagem = $linguagem;
        }

        /**
         * Get the value of linguagem
         */ 
        public function getLinguagem()
        {
            return $this->linguagem;
        }

        /**
         * Set the value of linguagem
         *
         * @return  self
         */ 
        public function setLinguagem($linguagem)
        {
            $this->linguagem = $linguagem;

            return $this;
        }

        public function relatorioFunc() 
        {
            parent::relatorioFunc();
            echo "<p> Linguagem: {$this->getLinguagem()} </p>";
        }
    }

?>