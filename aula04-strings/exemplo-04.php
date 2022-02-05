<?php

$frase = "A repetição é mãe da retenção.";

$palavra = "mãe";

$q = strpos($frase, $palavra); // IDENTIFICAR O TANTO DE CARACTERES ATE A PALABRA DESEJADA

var_dump($q);

$texto = substr($frase, 0, $q); // ESCOLHER DE ONDE ATÉ ONDE QUER CONTAR OS CARACTERES

var_dump($texto);

$texto2 = substr($frase, $q + strlen($palavra), strlen ($frase)); // TOTAL DE CARACTERES EM UMA FRASE

echo "<br>";

var_dump($texto2);