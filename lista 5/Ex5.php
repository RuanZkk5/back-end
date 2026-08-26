<?php

$nome = "ruan";
$nivel_acesso = 2;

if($nivel_acesso == 1){
    echo"Acesso liberado";
}
else if($nivel_acesso == 2){
    echo "acesso intermediario";
}
else if($nivel_acesso == 3){
    echo "acesso adm";
}
else{
    echo "acesso invalido";
} 
?>
