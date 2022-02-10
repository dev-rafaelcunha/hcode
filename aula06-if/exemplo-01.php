<?php

// $qualASuaIdade = 65;

// $idadeCriança = 12;
// $idadeMaior = 18;
// $idadeMelhor = 65;

// if ($qualASuaIdade < $idadeCriança) {
    
//     echo "Criança";

// } else if ($qualASuaIdade < $idadeMaior) {

//     echo "Adolecente";

// } else if ($qualASuaIdade < $idadeMelhor) {

//     echo "Adulto";

// } else {

//     echo "Idoso";

// }

// echo "<br>";

// echo ($qualASuaIdade < $idadeMaior)?"Menor de Idade":"Maior de Idade";


function idade($idade){

    if ($idade >= 0 && $idade <= 12) {
        return "Criança";

    }elseif ($idade >= 13 && $idade <= 17) {
        return "Adolescente";

    }elseif ($idade >= 18 && $idade <= 64) {
        return "Adulto";

    }elseif ($idade >= 65 && $idade <= 105) {
        return "Idoso";

    }else {
        return "Idade invalida";
    } 
}

$result = idade(106);

echo $result;

