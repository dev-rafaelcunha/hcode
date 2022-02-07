<?php


/*$arr = array(

    "nome" => "Junior",
    "idade" => 32
);*/

/*$arr = array(
    
    "nome" => "Rafael";
    "sobrenome" => "Souza";
     idade => 25;
    "cidade" => "Navegantes";
    "estado" => "Santa Catarina";
);*/


    // ouuuu //

// $nome = "Rafael"
// $sobrenome = "Souza"
// $nomeCompleto = $nome . " " . $sobrenome;
// $idade = 25;
// $cidade = "Navegantes";
// $estado = "Santa Catarina";

// echo $nome;

// function nome1($nome)
// {
//     echo $nome;
//     echo "<br>";
// }

// nome1 ("://Rafael1234");

// function idade($idade)
// {
//     echo $idade;
//     echo "<br>";
// }

// idade (18);

// $nome = "https://Rafael1234";
// $sobrenome = "app://hcode2234";

// function tratarDados($texto)
// {
//     $len = strpos ($texto, "/")+2;
//     echo substr ($texto, $len, -4);
//     echo "<br>";
// }

// tratarDados($nome);
// tratarDados($sobrenome);


$nome = "??youtube:001";
$nome2 = "??google:002";

function tratarURLS($texto)
{
    $len = strpos($texto, "?")+2;     // tirar o de trás
    echo substr ($texto, $len, -4);   // tirar o da frente
    echo "<br>";
}

tratarURLS($nome);
tratarURLS($nome2);

