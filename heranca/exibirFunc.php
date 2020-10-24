<?php

    require_once 'classes/Funcionario.php';
    require_once 'classes/Gerente.php';
    require_once 'classes/Programador.php';

    $nome = $_POST['nome'];
    $salario = $_POST['salario'];
    $cargo =  $_POST['cargo'];
    $observacao = $_POST['observacao'];

    $cargo == 1 
        ? $funcionario = new Gerente($nome, $salario, $observacao)
        : $funcionario = new Programador($nome, $salario, $observacao);

    $funcionario->relatorioFunc();

?>