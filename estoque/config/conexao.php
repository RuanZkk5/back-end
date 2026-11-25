<?php

try{
    $conexao = new PDO("mysql:host=localhost;dbname=estoque_facil; charset=utf8mb4", "root", "");
}
catch(PDOException $erro){
    die ("Erro ao conectar com o banco de dados: " );
    exit;
}