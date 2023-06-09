<?php
$con = new PDO("mysql:host=localhost;dbname=joaozin", "root", "");

$stmt = $con->prepare("insert into tb_usuario (deslogin, dessenha) values (:LOGIN, :PASS)");

$login = "João Lamão";
$pass = "123456789";

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASS", $pass);

$stmt->execute();

echo "OK";
?>