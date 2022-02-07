<?php

// // $frase = "A repetição é mãe da retenção.";

// $palavra = "mãe";

// $q = strpos($frase, $palavra); // IDENTIFICAR O TANTO DE CARACTERES ATE A PALABRA DESEJADA

// var_dump($q);

// $texto = substr($frase, 0, $q); // ESCOLHER DE ONDE ATÉ ONDE QUER CONTAR OS CARACTERES

// var_dump($texto);

// $texto2 = substr($frase, $q + strlen($palavra), strlen ($frase)); // TOTAL DE CARACTERES EM UMA FRASE

// echo "<br>";

// var_dump($texto2);




function trataDados($texto) {

    $len = strpos($texto, ":") + 1;

    echo substr($texto, $len, -1);

    echo "<br>";
}


trataDados("html:Hcode;");
trataDados("xml:Hcode;");
trataDados("html-https:Hcode;");
trataDados("https:Hcode;");