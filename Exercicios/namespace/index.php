<?php

    require_once("config.php");

    use Cliente\Cadastro;

    $cad = new Cadastro();
    $cad->setNome("João Lamão");
    $cad->setEmail("joaomatheuslamao9@gmail.com");
    $cad->setSenha("123456");

    $cad->registraVendas();
?>