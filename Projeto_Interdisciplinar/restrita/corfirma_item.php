<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <?php
    include 'conecta.php';
    echo "<br><hr>";
    session_start();
    $nf = $_SESSION['nf'];

    $consulta = "SELECT * FROM itens_nf WHERE num_nf = '$nf'";

    echo "<h1>NF: " . $nf . "</h1><br><hr>";
    $total = 0;

    foreach ($conexao -> query($consulta) as $linha) {
        echo "Cod Produto: ".$linha['cod_produto']."<br>";
        echo "Qtde: ".$linha['qtde']."<br>";
        echo "Subtotal: ".$linha['subtotal']."<br>";
        $total = $total + $linha['subtotal'];
        echo "<hr>";
    }
    echo "<b>TOTAL DA NOTA R$ ".$total."</b><hr>";
    ?>

    <p>O que deseja fazer?</p>
    <p><a href="seleciona_ultima_nf.php">Inserir outro produto</a></p>
    <p><a href="finalizar.php?total=<?php echo $total;
                                    ?>"> Finalizar nota fiscal</a></p>
                                    
</body>
</html>