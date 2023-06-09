<?php

    spl_autoload_register(function($nomeClasse){
        $dirClass = "class";
        $fileName = str_replace ("\\", "/", $dirClass . DIRECTORY_SEPARATOR . $nomeClasse . ".php");

        if (file_exists($fileName))
        {
            require_once($fileName);
        }
    });

?>