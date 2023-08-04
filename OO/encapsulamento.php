<?php
class Pessoa{
    public $nome = 'Genisson Ferreira';
    protected $idade = 30;
    private $senha = '123456';

    public function verDados(){
        echo $this->nome."\n";;
        echo $this->idade."\n";
        echo $this->senha;
    }
}

$obj = new Pessoa();

$obj->verDados();