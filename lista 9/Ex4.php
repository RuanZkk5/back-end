<?php

$numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$maior = $numeros[0];

foreach ($numeros as $numero) {
    if ($numero > $maior) {
        $maior = $numero;
    }
}
echo "maior numero: $maior";