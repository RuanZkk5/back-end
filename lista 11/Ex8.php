<?php

$kg_peixes = $_POST["kg"];
$multa = 0;

if($kg_peixes > 50){
    $multa = $kg_peixes - 50;
    echo "Multa = ", $multa*4, " reais";  
}
else{
    echo "Sem multa";
}

?>