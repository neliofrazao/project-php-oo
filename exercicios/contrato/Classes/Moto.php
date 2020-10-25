<?php 
     
    namespace Classes;

    use Interfaces\ICaracteristicas;

    class Moto extends Veiculo implements ICaracteristicas
    {
        public function __construct($nome, $marca, $modelo)
        {
            parent::__construct($nome, $marca, $modelo);
        }

       public function exibeNome() 
       {
            echo("<p> Nome da moto: {$this->getNome()}</>");
       }

       public function exibeMarca() 
       {
          echo("<p> Marca da moto: {$this->getMarca()}</>");
       }
        
       public function exibeModelo()
       {
          echo("<p> Modelo da moto: {$this->getModelo()}</>");
       }
    }

?>