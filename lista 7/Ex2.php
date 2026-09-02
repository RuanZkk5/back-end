<?php
function analisarvenda ($produto, $custo, $venda){
    $lucro = $venda - $custo;
    if($lucro <= 0){
        $mesagem = "Prejuizo";
    }else if($lucro <= 20){
        $mesagem = "Lucro baixo";
    } else{
        $mesagem = "Lucro alto";
    }
    echo "Produto: $produto<br>";
    echo "Custo: $custo<br>";
    echo "Venda: $venda<br>";
    echo "Lucro: $lucro<br>";
    echo "Status: $mesagem<br><br>";
}
analisarvenda("Produto A", 50, 100);