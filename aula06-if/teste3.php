<?php

function salario($salario){

    if ($salario >= 1200 && $salario <= 1800){
        return "Estagiário";
    
    }elseif ($salario >= 2000 && $salario <= 2400){
        return "Junior";
    
    }elseif ($salario >= 3200 && $salario <= 4000){
        return "Pleno";
    
    }elseif ($salario >= 5200 && $salario <= 7000){
        return "Senior";
    
    }elseif ($salario >= 10000 && $salario <= 15000){
        return "Elite";
    
    }else
        return "Salário fora do escopo da empresa !";{
    }    
}

$result = salario(14500);

echo $result;
