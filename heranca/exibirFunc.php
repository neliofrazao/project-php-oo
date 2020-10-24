<?php

    require_once 'autoload.php';
    
    use Classes\Funcionario;
    use Classes\Gerente;
    use Classes\Programador;

    $nome = $_POST['nome'];
    $salario = $_POST['salario'];
    $cargo =  $_POST['cargo'];
    $observacao = $_POST['observacao'];

    $cargo == 1 
        ? $funcionario = new Gerente($nome, $salario, $observacao)
        : $funcionario = new Programador($nome, $salario, $observacao);

    $funcionario->relatorioFunc();
    
?>