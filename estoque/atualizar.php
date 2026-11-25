<?php

include "config/conexao.php";

$id = $_POST["id"];
$nome = $_POST["nome"];
$categoria = $_POST["categoria"];
$preco = $_POST["preco"];
$quantidade = $_POST["quantidade"]; 

$sql = "UPDATE tb_produtos SET 
nome_produto = '$nome',
categoria = '$categoria',
preco = '$preco',
quantidade = '$quantidade'
WHERE id = $id";

if ($conexao->exec($sql)) {
    echo "Produto atualizado com sucesso!";
} else {
    echo "Erro ao atualizar o produto.";
}