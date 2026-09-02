<?php

$mes = "fevereiro";

switch($mes){
    case "janeiro":
        echo "31 dias";
        break;
    case "fevereiro":
        echo "28 dias";
        break;
    case "março":
        echo "31 dias";
        break;
    default:
        echo "Mês inválido";
        break;
}
