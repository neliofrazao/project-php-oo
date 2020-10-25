<?php

    namespace Classes;

    class Carnivoro extends Animal
    {
        public function habitoAlimentar() 
        {
            echo ("<p> Animal carnívoro se alimenta de: <b>{$this->getCome()}</b> </p>");
        }
    }

?>