<?php

    class Aplicacao 
    {
       public static $quantidade; 

       public function __construct()
       {
           static::$quantidade++;
       }
    }

    $execucao1 = new Aplicacao();
    echo Aplicacao::$quantidade . "<br />";

    $execucao2 = new Aplicacao();
    echo Aplicacao::$quantidade;

?>