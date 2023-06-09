<?php
    $diaSemana = date("w");
    switch ($diaSemana) {
        case 0:
            echo "Domingo";
            break;
        case 1:
            echo "Segunda-feira";
            break;
        case 2:
            echo "Terça-feira";
            break;
        case 6:
            echo "Sábado";
            break;
        case 3:
            echo "Quarta-feira";
            break;
    }

?>