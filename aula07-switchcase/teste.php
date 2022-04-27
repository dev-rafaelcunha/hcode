<?php

function semafaro($x){
    $sinal = array (
        "Verde" => "Continue !",
        "Amarelo" => "Atenção !",
        "Vermelho" => "Pare !"
    );
    
    $acao = $x;
    
    $sinaleira = isset($sinal[$x]);
    
    switch ($acao) {
        case 'Vermelho':
            echo $sinaleira;
            break;
    
        case 'Amarelo':
            echo $sinaleira;
            break;    
        
        case 'Verde':
            echo $sinaleira;
            break;    
        
        default:
            echo  'Não está em uma sinaleira';
            break;
    }
}

echo semafaro("Amarelo");

