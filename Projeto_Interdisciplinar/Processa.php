<?php
    session_start();
    include 'restrita/conecta.php';

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $consulta = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";

    $resultado = $conexao->query($consulta);
    $registros = $resultado->num_rows;

    $registro_usuario = mysqli_fetch_assoc($resultado);
//   print_r($registro_usuario);

 

    if ($registros == 1) {

    $_SESSION['id'] = $registro_usuario['id'];
    $_SESSION['nome'] = $registro_usuario['nome'];
    $_SESSION['email'] = $registro_usuario['email'];
    $_SESSION['senha'] = $registro_usuario['senha'];
    $_SESSION['nivel'] = $registro_usuario['nivel'];


        header('Location: restrita/index.php');
    } else {
    header('Location: index.php');
    }

?>