<?php

    namespace Classes;

    class ContaConrrente extends Conta
    {
        public function saca($valor) 
        {
            echo parent::AGENCIA;

            if ($this->getSaldo() >= $valor) {
                $this->setSaldo($this->getSaldo() - $valor - 0.1);
            }
            else {
                echo "Saldo insuficiente";
            }
        }
    }

?>