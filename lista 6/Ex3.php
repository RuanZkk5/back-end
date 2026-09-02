<?php

echo"Caixa de eletrônico - Itau<br>";
echo"Escolha uma opção:<br>";
echo"1 - Saldo<br>";
echo"2 - Fazer saque<br>";
echo"3 - Fazer depósito<br>";
echo"4 - Ver extrato<br>";
echo"5 - Sair<br>";

$opcao = "3";

switch($opcao){
    case "1":
        echo "Saldo: R$ 1000,00";
        break;
    case "2":
        echo "Saque realizado com sucesso";
        break;
    case "3":
        echo "Depósito realizado com sucesso";
        break;
    case "4":
        echo "Extrato: R$ 1000,00";
        break;
    case "5":
        echo "Saindo...";
        break;
    default:
        echo "Opção inválida";
        break;
}
