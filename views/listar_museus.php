<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Lista de Museus</title>
	</head>
	<body>
		<h1>Museus</h1>
		<table border="1">
			<tr>
				<th>Nome</th>
				<th>Pais</th>
				<th>Tipo</th>
			</tr>
			<?php
			
				foreach($retorno as $dado)
				{
					echo "<tr>
						  <td>{$dado->nome}</td>
						  <td>{$dado->pais}</td>
						  <td>{$dado->descritivo}</td>
						 </tr>";
				}
			?>
		</table>
		<br><br>
		<a href="index.php?controle=museuController&metodo=inserir">Novo Museu</a>
	</body>
</html>