<?php

    $con = new mysqli("localhost", "root", "", "joaozin");
    if ($con->connect_error) {
        echo "Deu erro aqui hein " . $con->connect_error;
    }

    $result = $con->query("select*from tb_usuario order by deslogin");

    $data = array();

    while ($row = $result->fetch_assoc()) {
        array_push($data, $row);
    }

    echo json_encode($data);

    /*$stmt = $con->prepare("insert into tb_usuario (deslogin, dessenha) values(?, ?)");
    $stmt -> bind_param("ss", $login, $senha);
    $login = "ana";
    $senha = "76654";
    $stmt ->execute();*/
?>