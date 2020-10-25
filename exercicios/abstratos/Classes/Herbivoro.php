<?php

    namespace Classes;

    class Herbivoro extends Animal
    {
        public function habitoAlimentar() 
        {
            echo ("<p> Animal herbívoro se alimenta: <b>{$this->getCome()}</b> </p>");
        }
    }

?>