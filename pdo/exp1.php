<?php
$con = new PDO("mysql:dbname=joaozin;host=localhost", "root", "");

$stmt = $con->prepare("select*from tb_usuario order by id_usuário");
$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($results as $row) {
    foreach ($row as $key => $value) {
        echo "<strong>".$key.":</strong> ". $value. "<br>";
    }
    echo "=================================<br>";
}
?>