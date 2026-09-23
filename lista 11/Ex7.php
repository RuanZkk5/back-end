<?php

$email = $_POST["email"];
$senha = $_POST["senha"];

if($email == "ruan@sp.senai.br"
    && $senha == "ruan123"){
    echo "login, bem sucessido";
}else{
    echo "login ou senha ta errado, burro";
}
?>