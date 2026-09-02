<?php

function verificaridade($idade){
    if($idade < 16){
   return "Não pode votar";
    }else if($idade <18){
        return "Voto opcional";
    }
    else{
        return "Pode votar";
    }
}
echo verificaridade(17);