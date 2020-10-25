<?php

    namespace Classes;

    class Triangulo extends Figura
    {
        public function mostraArea()
        {
            echo (($this->eixoX * $this->eixoY)/2);
        }
    }
    

?>