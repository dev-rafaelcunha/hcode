<?php

function semafaro($sinal){

$semafaro = [    
    "Verde" => 1,
    "Amarelo" => 2,
    "Vermelho" => 3
];

$get = $semafaro = $sinal;

switch ($get) {
    case 1:
        return "Continue !";
        break;

    case 2:
        return "Atenção !";
        break;
        
    case 3:
        return "Pare !";
        break;    
    
    default:
        return "Você não está em um semafaro !";
        break;
}
}

echo semafaro(4);












