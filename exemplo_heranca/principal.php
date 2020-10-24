<?php

    require_once 'Pessoa.php';
    require_once 'Fisica.php';
    require_once 'Juridica.php';

    $juridica = new Juridica("Unipe", "1987-2008");

    $juridica->validarCNPJ();

?>