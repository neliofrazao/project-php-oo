<?php

    require_once '../helpers/autoload.php';
    
    use Classes\Conta;
    use Classes\ContaConrrente;
    use Classes\ContaPoupanca;

    $contaPoupanca = new ContaPoupanca(500);
    $contaConrrente= new ContaConrrente(200);

    $contaPoupanca->saca(100);
    $contaConrrente->saca(100);

    $contaPoupanca->imprimeExtrato();
    $contaConrrente->imprimeExtrato();

?>