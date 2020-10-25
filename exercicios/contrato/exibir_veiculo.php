<?php

    require_once '../helpers/autoload.php';
    
    use Classes\Veiculo;
    use Classes\Carro;
    use Classes\Moto;
    
    $nome = $_POST['nome'];
    $marca = $_POST['marca'];
    $modelo =  $_POST['modelo'];
    $tipoVeiculo = $_POST['tipoVeiculo'];

    $tipoVeiculo == 1 
        ? $veiculo = new Carro($nome, $marca, $modelo)
        : $veiculo = new Moto($nome, $marca, $modelo);

    $veiculo->exibeNome();
    $veiculo->exibeMarca();
    $veiculo->exibeModelo();

?>