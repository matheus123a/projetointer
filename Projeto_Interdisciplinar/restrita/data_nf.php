<?php
	include 'conecta.php';
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>DATA NOTA FISCAL</title>
 </head>
 <body>
 	<form action="gera_nf.php" method="post">
 		<p>Insira a data da venda</p>
 		DATA: <input type="date" name="data">
 		<hr>
 		<input type="submit" value="Continuar">
 	</form>
 
 </body>
 </html>
 