<?php

$peso = 60;
$altura = 1.73;

$resultado = $peso / ($altura * $altura);

echo "IMC: ".$resultado."<br>";

if ($resultado >= 19 && $resultado <= 24){
    echo "Peso ideal";
} elseif ($resultado >= 25 && $resultado <= 29){
    echo "Sobrepeso";
} elseif ($resultado >= 30 && $resultado <= 34){
    echo "Obesidade grau 1";
} elseif ($resultado >= 35 && $resultado <= 39){
    echo "Obesidade grau 2";
} elseif ($resultado >= 40){
    echo "Obesidade grau 3";
} else {
    echo "Abaixo do peso";
}

?>