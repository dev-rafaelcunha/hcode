<?php

/*
$anoNascimento = 1990;

$nomeCompleto = "";*/

$nome1 = "João"; // Correto ( Número só pode depois do nome )
// $1nome = "João"; // Errado ( Não pode número antes do nome )

$sobrenome = "Rangel";

$nomeCompleto = $nome1 . " " . $sobrenome;

echo $nomeCompleto;

exit;

echo $nome1;

echo "<br/>";

unset($nome1);

if (isset($nome1)) {
    
    echo $nome1;

}

