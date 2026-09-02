<?php

function calculardesconto($valor, $desconto){
    $valorDesconto = $valor * ($desconto / 100);
    $valorFinal = $valor - $valorDesconto;
    return $valorFinal;
}
echo "Valor final com desconto: ".calculardesconto(100, 10);