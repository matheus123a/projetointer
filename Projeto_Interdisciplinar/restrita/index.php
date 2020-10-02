<?php
session_start();

// $_SESSION['id'] 
// $_SESSION['nome'] 
// $_SESSION['email'] 
// $_SESSION['senha'] 

if ((!isset($_SESSION['id']) == true) && (!isset($_SESSION['nome']) == true) && (!isset($_SESSION['email']) == true) && (!isset($_SESSION['senha']) == true)) {
	header("Location: ../index.php");
}

?>


<!DOCTYPE html>
<html>

<head>
	<title></title>
</head>

<body>
	<h1>OLÁ
		<?php echo $_SESSION['nome'];?>, Bem vindo</h1>
		
	<h2>Inicia uma nova venda</h2>

	<form action="data_nf.php" method="post">

		<p>Ao clicar em INICIAR VENDA, o sistema irá gerar uma nova nota fiscal na tabela nota_fiscal sem o valor total.</p>
		<p>Na proxima tela será solicitado a data da NF</p>
		<p>O valor total será atualizado após a inserção dos itens da nota fiscal</p>
		<hr>
		<input type="submit" value="INICIAR VENDA">
	</form>

	<h1>Outras opções</h1>
	<p><a href="ver_nf.php">Ver notas emitidas</a></p>
	<p><a href="ver_produtos.php">Ver produtos</a></p>
	<p><a href="cadastrar_produto.php">Cadastrar produtos</a></p>
	<p><a href="logout.php">LOGOUT</a></p>


</body>

</html>