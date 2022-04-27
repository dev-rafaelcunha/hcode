<?php

$notaFinal = 11;

switch ($notaFinal) {
    case 0:
    case 1:    
    case 2:    
    case 3:
    case 4:
        echo "Reprovado";        
        break;
    
    case 5:
    case 6:        
        echo "Exame";
        break;

    case 7:
    case 8:        
    case 9:
    case 10:
        echo "Aprovado";
        
    default:
        echo "Nota inválida !";
}