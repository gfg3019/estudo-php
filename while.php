<?php
$codicao = true;
while($codicao){
    $numero = rand(1, 10);
    if($numero === 3){
        echo "TRÊS!!!";
        $codicao = false;
    }
    echo $numero . "";
}

$total = 100;
$desconto = 0.9;
do{
    $total *= $desconto;
}while($total > 100);
echo $total;