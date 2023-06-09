<?php

require_once("config.php");

/*$sql = new Sql();
$usuarios = $sql->select("select*from tb_usuario");
echo json_encode($usuarios);*/

//$usuario = new Usuario();
//$usuario->loadById(3);
//echo $usuario;

$allUsuarios = new Usuario();
$resultado = $allUsuarios->tbInteira();
echo json_encode($resultado);
?>