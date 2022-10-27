<?php

$pasta = 'arquivos';                                            
$permissao = '0775';

if(!is_dir($pasta)) mkdir($pasta, $permissao);

echo 'Diretório criado com sucesso!';


// PERMISSÃO VAI DO 0 ao 7 //

// 0 = SEM PERMISSÃO //
// 1 = EXECUÇÃO //
// 2 = GRAVAÇÃO //
// 3 = EXECUÇÃO E GRAVAÇÃO //
// 4 = LEITURA //
// 5 = LEITURA E EXECUÇÃO // " UM DOS MAIS USADOS "
// 6 = LEITURA E GRAVAÇÃO //
// 7 = LEITURA, EXECUÇÃO e GRAVAÇÃO // " UM DOS MAIS USADOS POREM COM CUIDADO PARA USUARIO "

// CONJUNTO DE PERMISSÃO PARA UNIX //

// 0775 //

// 0 = ? //
// 7 = ADMINISTRADOR //
// 7 = GRUPOS //
// 5 = OUTROS, CONVIDADOS, VISITANTES.