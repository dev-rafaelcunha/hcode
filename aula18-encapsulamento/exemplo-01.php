<?php

class Pessoa {

    public $nome = 'Rasmus Lerdorf';
    protected $idade = 48;
    private $senha = '123456';

    public function verDados()
    {
        echo $this->nome . '<br>';
        echo $this->idade . '<br>';
        echo $this->senha . '<br>';
    }
}

$obPessoa = new Pessoa();

//echo $obPessoa->nome . '<br>';

$obPessoa->verDados();