<?php

$name = 'images';

if (!is_dir($name))
{
    mkdir($name); // CRIAR DIRETÓRIO //
    echo 'Diretório images criado com sucesso!';

} else {
    
    rmdir($name); // EXCLUIR DIRETÓRIO //
    echo 'Já existe o diretório: images foi removido!';
}