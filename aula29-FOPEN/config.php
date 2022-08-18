<?php

spl_autoload_register(function($class_name)
{
    $fileName = 'class' . DIRECTORY_SEPARATOR . $class_name. '.php';
    
    if(file_exists($fileName)){
        require_once($fileName);
    }
});

// spl_autoload_register(function($className)
// {
//     $dirClass = 'class';
//     $fileName = $dirClass . DIRECTORY_SEPARATOR . $className . '.php';

//     if(file_exists($fileName))
//     require_once($fileName);
// });