<?php

$n1 = 10;
$n2 = 5;
$operacao = "+";

if($operacao == "+"){
    echo"Soma = $n1 + $n2";
}
else if($operacao == "-"){
  echo"Subtração = $n1 - $n2";
}
else if($operacao == "*"){
      echo"Multiplicação = $n1 * $n2";
}
else if($operacao == "/"){
      echo"Divisão = $n1 / $n2";
}
else{
    echo "Operação invalida";
}
?>