<?php



spl_autoload_register(function ($nomeClasse ){
    include $nomeClasse . '.php';
});

$carro = new DelRey();
$carro->acelerar(80);