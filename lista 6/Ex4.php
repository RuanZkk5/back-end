<?php

echo "Pizzaria<br>";
echo "Escolha uma opção:<br>";
echo "1 - Pizza <br>";
echo "2 - Hambúrguer <br>";
echo "3 - Refrigerante <br>";
echo "4 - Sobremesa <br>";
echo "5 - Sair <br>";

$opcao = "2";

switch($opcao){
    case "1":
        echo "Pizza Calabresa, Pizza Portuguesa, Pizza Quatro Queijos";
        break;
    case "2":
        echo "Hambúrguer, Hambúrguer com queijo, Hambúrguer duplo"; 
        break;
    case "3":
        echo "Refrigerante, Coca-Cola, Guaraná, Fanta";  
        break;
    case "4":
        echo "Sobremesa, Sorvete, Pudim, Mousse";
        break;
    case "5":
        echo "Saindo...";
        break;
    default:
        echo "Opção inválida";
        break;
}
?> 