<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
        echo date("d/m/Y H:m:s");
        echo "<br>";
        echo time();
        echo "<br>";
        $ts = strtotime("2004-11-15");
        echo date("l, d/m/Y", $ts);
        echo "<br>";
        ///////////////////////////////
        setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");
        echo ucwords(strftime("%a, %b"));
    ?>
</head>
<body>
    
</body>
</html>