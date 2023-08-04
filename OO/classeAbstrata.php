<?php
interface Veiculo{
    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocarMarchar($marcha);
}

abstract class Automovel implements Veiculo{
    public function acelerar($velocidade)
    {
        echo "O veiculo acelerou até" . $velocidade . "km/h";   
    }

    public function frenar($velocidade)
    {
        echo "O veiculo frenou até" . $velocidade . "km/h";
    }


    public function trocarMarchar($marcha)
    {
        echo "O veículo engatou a marcha". $marcha;
    }
}