<?php
$pessoas = array();
array_push($pessoas, array(
    'nome' => 'joão',
    'idade' => 20,
));

array_push($pessoas, array(
    'nome' => 'Genisson',
    'idade' => 30
));

print_r($pessoas[0]['nome']);