<?php

$nome = "joao rangel";

$nome = strtoupper($nome); // TUDO MAISUCULO

echo $nome;

$nome = strtolower($nome); // TUDO MINUSCULO

echo "<br>";

echo $nome;

echo "<br>";

echo ucfirst($nome); // PRIMEIRA LETRA SOMENTE DA PRIMEIRA PALAVRA EM MAIUSCULO

echo "<br>";

echo ucwords($nome); // PRIMEIRA LETRA DE CADA PALAVRA EM MAIUSCULO