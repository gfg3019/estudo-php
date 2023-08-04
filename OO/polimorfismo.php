<?php
abstract class Animal
{
    public function falar()
    {
        return "Som";
    }

    public function mover()
    {
        return "andar";
    }

}

class Cachorro extends Animal
{
    public function falar()
    {
        return "late";
    }
}

class Gato extends Animal
{
    public function falar()
    {
        return "miaauu";
    }
}

class Passaro extends Animal
{
    public function falar()
    {
        return "canta";
    }

    public function mover()
    {
        return "Voa e".parent::mover();
    }
}

$buma = new Cachorro();
echo $buma->falar()."\n";
echo $buma->mover()."\n";
echo "=================================\n";


$zoro = new Gato();
echo $zoro->falar()."\n";
echo $zoro->mover()."\n";
echo "=================================\n";
$piupiu = new Passaro();
echo $piupiu->falar()."\n";
echo $piupiu->mover()."\n";