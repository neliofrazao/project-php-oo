<?php

    class Aplicacao 
    {
       private static $quantidade; 

       public function __construct()
       {
           static::$quantidade++;
       }

       public static function imprimeContador() 
       {
           return static::$quantidade;
       }
    }

    $execucao1 = new Aplicacao();
    echo Aplicacao::imprimeContador() . "<br />";

    $execucao2 = new Aplicacao();
    echo Aplicacao::imprimeContador();

?>