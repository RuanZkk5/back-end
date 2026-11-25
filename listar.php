
<?php

include "config/conexao.php";

$sql = "SELECT * FROM tb_produtos";
$resultado = $conexao->query($sql);

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estoque Fácil | Loja Gamer</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <h2>Lista de Produtos</h2>

    <table>

        <tr>
            <th>ID</th>
            <th>Imagem</th>
            <th>Nome do Produto</th>
            <th>Quantidade</th>
            <th>Preço</th>
            <th>Categoria</th>
            <th>Ações</th>
        </tr>

        <?php while ($produto = $resultado->fetch(PDO::FETCH_ASSOC)) { ?>

            <tr>

                <td><?php echo $produto['id']; ?></td>

                <td>
                    <?php if (!empty($produto['imagem'])) { ?>
                        <img class="imagem-produto" src="Upload/<?php echo $produto['imagem']; ?>" width="100" alt="Imagem do produto">
                    <?php } else { ?>
                        Sem imagem
                    <?php } ?>
                </td>

                <td><?php echo $produto['nome_produto']; ?></td>

                <td><?php echo $produto['quantidade']; ?></td>

                <td>R$ <?php echo number_format($produto['preco'], 2, ',', '.'); ?></td>

                <td><?php echo $produto['categoria']; ?></td>

                <td>
                    <a href="excluir.php?id=<?php echo $produto['id']; ?>">Excluir</a>
                    -
                    <a href="editar.php?id=<?php echo $produto['id']; ?>">Editar</a>
                </td>

            </tr>

        <?php } ?>

    </table>

    <br>

    <a href="cadastrar.php">Cadastrar Produto</a>

</body>
</html>
