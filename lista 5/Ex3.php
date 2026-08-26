<?php

$nota1 = 10;
$nota2 = 8;

$media = ($nota1 + $nota2) / 2;

if ($media >= 7) {
    echo "Aprovado";
} else if ($media >= 5 && $media < 7) {
    echo "Recuperação";
} else {
    echo "Reprovado";
}
?>