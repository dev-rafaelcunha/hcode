<?php

function notaFinal ($cpf){
    
    $aprovados = [
        "10405252904" => true,
        "56059906915" => false,
        "04111375901" => true
    ];

    $aluno = $aprovados[$cpf];

    switch ($aluno) {
        case true:
            return "Aprovado";
            break;

        case false:
            return "Reprovado";
            break;
    
        default:
            return "Por favor entrar em contato com a escola";
    }
}

echo notaFinal("56059906915");