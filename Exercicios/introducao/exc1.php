<?php
    $nome = "João Matheus";
    $sobrenome = "Lamão";

    //unset($nome);

    if (isset($nome)) {
        echo $nome . " " . $sobrenome;
    }
    else {
        echo "Seu nome não foi definido.";
        echo "<br>";
        echo "Seu sobrenome é " . $sobrenome;
    }
    echo "<br>";
    ////////////////////////////////////////////////
    $testeListas = array("item1", "item2", "item3");
    echo var_dump($testeListas);
    echo "<br>";
    ////////////////////////////////////////////////
    $testeObj = new DateTime();
    echo var_dump($testeObj);
    echo "<br>";
    ////////////////////////////////////////////////
    $valor = "1000";
    var_dump($valor);
    echo "<br>";
?>
