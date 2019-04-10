<?php

spl_autoload_register(function ($class) {
    $diretorio = dir('./src/');

    while ($folder = $diretorio->read() ) {
        if($folder != '.' && $folder != '..'){
        
            if(file_exists(__DIR__."\\".$folder."\\".$class.".class.php")){
                include(__DIR__."\\".$folder."\\".$class.".class.php");
            }
        } 
    }
});
