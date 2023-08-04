<?php
$pessoa = array(
    'nome' => 'Genisson',
    'idade' => 20,
);

foreach($pessoa as &$value){
    if(gettype($value) === 'integer') $value += 10;
    echo $value."\n";
}

print_r($pessoa);