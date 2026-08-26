<?php

$idade = 65;
$deficiente = false;
$gestante = false;

if ($idade >= 60 || $deficiente == true || $gestante == true) {
    echo "Atendimento prioritário";
} else {
    echo "Atendimento normal";
}

?>