<?php
    session_start();
    include 'conecta.php';
    if (($_SESSION['nivel']) != 2) {
    header("Location: aviso.php");
    }
?>

<!DOCTYPE html>
<html>

<head>
    <title>CADASTRAR NOVO PRODUTO</title>
</head>

<body>
    <form action="inserir_produto.php" method="post">
        <p>Insira os dados do produto</p>
        NOME:  <input type="text" name="nomeP"><br>
        PREÇO: <input type="text" name="precoP" value="R$0.00"><br>

        <hr>
        <input type="submit" value="Cadastar">
    </form>

</body>

</html>