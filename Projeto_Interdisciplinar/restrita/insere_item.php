<!DOCTYPE html>
<html>

<head>
    <title>Item da Nota Fiscal</title>
</head>

<body>
    <?php
    include 'conecta.php';
    echo "<br>";

    session_start();
    $nf = $_SESSION['nf'];
    echo "<b>Numero da nf: " . $nf . "</b><br>";
    $id_prod = $_POST['produto_opcao'];
    $qtde_prod = $_POST['qtde'];

    $consulta = "SELECT preco,nome FROM produtos WHERE id = '$id_prod'";
    $consulta = $conexao->query($consulta);
    $linha = $consulta->fetch_assoc();
    print_r($linha);
    $preco = $linha['preco'];
    $nome = $linha['nome'];

    $subtotal = $preco * $qtde_prod;

    ?>

    <form action="insere_item_nf.php" method="POST">
        <p>
            ID produto: <input tipy="text" name="id_prod" value="<?php echo $id_prod;
                                                                    ?>" readonly="readonly">
        </p>
        <p>
            Produto: <input type="text" name="nome_prod" value="<?php echo $nome;
                                                                ?>" readonly="readonly">
        </p>
        <p>
            Valor unitario: <input type="text" name="valor_unit" value="<?php echo $preco;
                                                                        ?>" readonly="readonly">
        </p>
        <p>
            Quantidade : <input type="text" name="qtde" value="<?php echo $qtde_prod;
                                                                ?>" readonly="readonly">
        </p>
        <p>
            Subtotal: <input type="text" name="subtotal" value="<?php echo $subtotal;
                                                                ?>" readonly="readonly">
        </p>

        <input type="submit" value="ADICIONAR PRODUTO">

</form>
</body>
</html>