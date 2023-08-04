<?php
function soma(int ...$valores):string{
    return  array_sum($valores);
}

echo var_dump(soma(2, 2))."\n";
echo soma(10, 5)."\n";
echo soma(1.4, 6.3)."\n";
echo soma(1000, 3000)."\n";