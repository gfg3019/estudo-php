<?php
$pessoas = array();
array_push($pessoas, array(
    'nome' => 'joao',
    'idade' => 20,
));

array_push($pessoas, array(
    'nome' => 'Genisson',
    'idade' => 30
));

echo json_encode($pessoas);