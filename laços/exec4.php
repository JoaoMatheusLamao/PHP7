<form>
    <input type="text" name="nome" id="inpNome">
    <input type="date" name="data" id="inpData">
    <input type="submit" value="OK" id="inpOk">
</form>

<?php
    if (isset($_GET)) {
        foreach ($_GET as $nomeCampo => $value) {
            echo "Nome do campo: " . $nomeCampo ."<br>";
            echo "Conteúdo do campo: " . $value ."<br>";
            echo "<hr>";
        }
    }
?>