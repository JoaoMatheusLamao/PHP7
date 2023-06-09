<?php
$conn = new PDO("mysql:host=localhost;dbname=joaozin", "root", "");

$stmt = $conn->prepare("update tb_usuario set deslogin = :login, dessenha = :pass where id_usuário = :id");

$login = "Pedro";
$pass = "15112004";
$id = 1;

$stmt->bindParam(":login", $login);
$stmt->bindParam(":pass", $pass);
$stmt->bindParam(":id", $id);

$stmt->execute();

echo "Alterado com sucesso";
?>