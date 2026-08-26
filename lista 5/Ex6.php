<?php

$usuario = "Ruan Victor";
$idade = 22;

if($idade < 12){
    echo "Cadastro não permitido";
}
else if($idade >= 13 && $idade < 16){
    echo "Só pode usar a plataforma com controle dos pais";
}
else{
    echo"plataforma lierada";
}
?>