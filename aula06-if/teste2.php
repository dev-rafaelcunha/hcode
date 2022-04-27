<?php

function idade($idade){

    if ($idade >= 0 && $idade <= 12){
        return "Criança";
    
    } elseif ($idade >= 13 && $idade <= 17){
        return "Adolescente";
    
    } elseif ($idade >= 18 && $idade <= 65){
        return "Adulto";
    
    } elseif ($idade >= 66 && $idade <= 100){
        return "Idoso";
    
    } else { 
        return "Idade inválida !"; 
    }
}

$result = idade(101);

echo $result;

