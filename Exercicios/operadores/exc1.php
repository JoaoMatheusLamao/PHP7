<?php
    $nome = "João Matheus";
    echo $nome;
    echo "<br>";
    /////////////////////////////
    $sobrenome = "Lamão";
    echo $nome . " " . $sobrenome;
    echo "<br>";
    /////////////////////////////
    $nomeCompleto = $nome .= $sobrenome;
    echo $nomeCompleto;
    echo "<br>";
    /////////////////////////////
    $valor = 0;
    $valor += 10;
    $valor += 90;
    $valor *= .9;
    echo $valor;
    echo "<br>";
    /////////////////////////////
    $a = 20;
    $b = 10;
    var_dump($a <=> $b);
    echo "<br>";
    /////////////////////////////
    $c = NULL;
    echo $c;
    /////////////////////////////
    $d = 10;
    echo ++$d;
?>