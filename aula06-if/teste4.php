<?php

function salario ($salario){
    
    if ($salario >= 1200 && $salario <= 1800) {
    return "Estagiário";

}   elseif ($salario >= 2000 && $salario <= 2800) {
    return "Junior";

}   elseif ($salario >= 3500 && $salario <= 5000) {
    return "Pleno";

}   elseif ($salario >= 5600 && $salario <= 8000) {
    return "Senior";

}   elseif ($salario >= 8800 && $salario <= 12500) {
    return "Elite";

}   else
    return "Salário fora do escopo da empresa !";
}

echo salario(12400);