<?php

    namespace Classes;

    class Herbivoro extends Animal
    {
        public function habitoAlimentar() 
        {
            echo ("<p> Animal herbívoro come: <b>{$this->getCome()}</b> </p>");
        }
    }

?>