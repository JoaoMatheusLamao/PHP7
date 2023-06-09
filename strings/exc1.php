<?php
    $nome = "joao matheus";
    echo strtoupper($nome);
    echo "<br>";
    //////////////////////////////
    echo strtolower("$nome");
    echo "<br>";
    //////////////////////////////
    echo ucwords($nome);
    echo "<br>";
    //////////////////////////////
    echo strtolower("$nome");
    echo "<br>";
    //////////////////////////////
    echo ucfirst($nome);
    echo "<br>";
    //////////////////////////////
    echo str_replace("o", "0", $nome);
    echo "<br>";
    echo str_replace("0", "o", $nome);
    echo "<br>";
    //////////////////////////////
    $frase = "Atirei o pau no gato";
    $q = strpos($frase, "pau");
    var_dump($q);
    echo "<br>";
    echo substr($frase, 0, $q);
    echo "<br>";
    echo substr($frase, $q, strlen($frase));
    
?>