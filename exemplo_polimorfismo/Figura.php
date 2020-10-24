<?php
    namespace Classes;

    class Figura
    {
        protected $eixoX;
        protected $eixoY;
    

        public function mostraArea()
        {
            echo ($this->eixoX * $this->eixoY);
        }
    }

?>