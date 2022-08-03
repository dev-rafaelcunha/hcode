<?php

class Pessoa {

    public $nome; // Atributo // é = Variavel //

    public function falar(){ // Método // é = Função //

        return "O meu nome é ".$this->nome;

    }
}

$glaucio = new Pessoa();
$glaucio->nome = "Glaucio Daniel";
echo $glaucio->nome;
//echo $glaucio->falar();

