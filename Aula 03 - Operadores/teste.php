<?php

$a = NULL;
$b = 3.0;
$c = 5;

$result = $a / $b;

echo $result;

echo "<br>";

var_dump($a > $b);

echo "<br>";

var_dump($a < $b);

echo "<br>";

echo $a ?? $b ?? $c;

echo "<br>";

echo $a <=> $b;

echo "<br>";

$nome = "Rafael";
$sobrenome = "Souza";
$nomeCompleto = $nome . " " . $sobrenome;

echo $nomeCompleto;

echo "<br>";

var_dump($a == $b);

echo "<br>";

var_dump($a === $b);

echo "<br>";

echo ++$a;

echo "<br>";

echo --$b;

