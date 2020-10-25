<?php 

     namespace Classes;

     use Interfaces\ICaracteristicas;
     
     class Carro extends Veiculo implements ICaracteristicas
     {
          public function __construct($nome, $marca, $modelo)
          {
               parent::__construct($nome, $marca, $modelo);
          }

          public function exibeNome() 
          {
               echo("<p> Nome da Carro: {$this->getNome()}</>");  
          }

          public function exibeMarca() 
          {
               echo("<p> Marca da Carro: {$this->getMarca()}</>");
          }
          
          public function exibeModelo()
          {
               echo("<p> Modelo da Carro: {$this->getModelo()}</>");
          }
     }

?>