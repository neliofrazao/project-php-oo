<?php

    require_once '../helpers/autoload.php';
    
    use Controllers\CadastroController;

    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    
    (new CadastroController())->inserir($nome, $telefone, $email);

?>