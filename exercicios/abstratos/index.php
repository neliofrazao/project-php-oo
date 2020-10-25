<?php

    require_once '../helpers/autoload.php';
    
    use Classes\Conta;
    use Classes\Carnivoro;
    use Classes\Herbivoro;

    $animalCarnivoro = new Carnivoro("Carne");
    $animalHerbivoro= new Carnivoro("Legumes");

    $animalCarnivoro->habitoAlimentar();
    $animalHerbivoro->habitoAlimentar();

?>