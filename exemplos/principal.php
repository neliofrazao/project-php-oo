<?php 

    require_once "Produto.php";

    $produto = new Produto("001", "Camisa do Sport", 320);

    $produto->imprimeProduto();
    
?>