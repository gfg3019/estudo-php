<?php
class Documentos{
    private $numero;
    public function getNumero(){
        return $this->numero;
    }

    public function setNumero($numero){
        $this->numero = $numero;
    }
}

class CPF extends Documentos{
    public function validar():bool{
        //validar cpf
        $numeroCPF = $this->getNumero();
        return true;
    }
}

$doc = new CPF();
$doc->setNumero('1234567899');
var_dump($doc->validar());
echo "\n";
echo $doc->getNumero();