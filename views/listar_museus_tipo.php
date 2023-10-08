<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Lista de Museus</title>
	</head>
	<body>
		<h1>Tipo de Museu - <?php echo $retorno[0]->descritivo; ?></h1>
		<table border="1">
			<tr>
				<th>Museu</th>
				<th>País</th>
			</tr>
			<?php
			
				foreach($retorno as $dado)
				{
					
					echo "<tr>
						  <td>{$dado->nome}</td>
						  <td>{$dado->pais}</td>
						  </tr>";
				}
			?>
		</table>
		
	</body>
</html>