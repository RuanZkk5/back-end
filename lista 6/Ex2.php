<?php

$opcao = "2";

switch($opcao){
    case "1":
        echo "Segunda via da fatura";
        break;
    case "2":
        echo "upgrade de plano";
        break;
    case "3":
        echo "fale com atendente";
        break;
    default:
        echo "Opção inválida";
        break;
}