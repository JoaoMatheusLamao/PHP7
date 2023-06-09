<?php
    $pessoas = array();
    array_push($pessoas, array(
        'nome' => 'João',
        'idade' => 17
    ));
    array_push($pessoas, array(
        'nome' => 'Matheus',
        'idade' => 18
    ));
    array_push($pessoas, array(
        'nome' => 'Ana',
        'idade' => 17
    ));
    echo json_encode($pessoas);
    echo "<br>";

    $json = '[{"nome":"Jo\u00e3o","idade":17},{"nome":"Matheus","idade":18},{"nome":"Ana","idade":17}]';

    $teste = json_decode($json);
    var_dump($teste);
?>