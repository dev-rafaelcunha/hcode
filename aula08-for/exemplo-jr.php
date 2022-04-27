<?php

$dados = [];

for($x=1; $x <= 150; $x++) {
    
    $tab = [];

    for ($y=1; $y <=10; $y++) {

        $result = $x * $y;

        $tab[$y] = $x . " x " . $y . " = " . $result;
    }

    $dados[$x] = $tab;
}

echo json_encode($dados);