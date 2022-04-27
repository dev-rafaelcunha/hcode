<?php

function salario($salario)
{

    if ($salario >= 1200 && $salario <= 1800) {

        return "Estagiário";
    } elseif ($salario >= 2400 && $salario <= 3200) {

        return "Junior";
    } elseif ($salario >= 4000 && $salario <= 5500) {

        return "Pleno";
    } elseif ($salario >= 6000 && $salario <= 8200) {

        return "Senior";
    } elseif ($salario >= 10000 && $salario <= 15000) {

        return "Pro";
    } else { 
        
        return "Salario fora do escopo da empresa !"; 
    }

}

echo salario(7000);
