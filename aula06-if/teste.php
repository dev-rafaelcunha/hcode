<?php

// $salario = 5998.50;

// $salarioAprendiz = 1500;
// $salarioJunior = 2400;
// $salarioPleno = 4000;

// if ($salario < $salarioAprendiz) {
    
//     echo "Aprendiz";
// } else if ($salario < $salarioJunior) {

//     echo "Aprendiz";
// } else if ($salario < $salarioPleno) {

//     echo "Junior";
// } else {

//     echo "Pleno";
// }


function categoriaSalario($salario) {

    if($salario >= 0.00 && $salario <= 1999.00) {

        return "Estagiario";
    } elseif($salario >= 2000.00 && $salario <= 3999.00) {
    
        return "Junior";
    } elseif($salario >= 4000.00 && $salario <= 6999.00) {
    
        return "Pleno";
    } elseif($salario >= 7000.00 && $salario <= 10000.00) {
    
        return "Sênior";
    } else {
    
        return "Sálario fora do escopo da empresa.";
    }
}

$result = categoriaSalario(2000);

echo $result;