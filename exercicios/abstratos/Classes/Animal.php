<?php
    namespace Classes;

    abstract class Animal
    {
        protected $come;
        
        public function __construct($come)
        {
            $this->come = $come;
        }
        
        /**
         * Get the value of saldo
         */ 
        public function getCome()
        {
            return $this->come;
        }

        /**
         * Set the value of saldo
         *
         * @return  self
         */ 
        public function setCome($come)
        {
            $this->come = $come;

            return $this;
        }

        abstract public function habitoAlimentar();
    }

?>