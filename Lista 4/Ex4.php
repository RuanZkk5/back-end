<?php

$email = "ruan.bianco@gmail.com";
$senha = "123456";
$ativo = true;

echo "Login - Facebook<br>";
if($email == "ruan.bianco@gmail.com" && $senha == "123456" && $ativo == true){
    echo "Login realizado com sucesso!";
}
else{
    echo "Email ou senha incorretos.";
}

?>