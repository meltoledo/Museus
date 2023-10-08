<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Tipo de Museu</title>
		<style>
			div{color:red; font-size:11px;}
		</style>
	</head>
	<body>
		<h1>Tipo de Museu</h1>
		<form action="#" method="post">
			
			<label>Tipo de Museu:</label>
			<select name="tipo">
			<option value="0">Escolha um tipo</option>
			<?php
				foreach($retorno as $dado)
				{
					echo "<option value='{$dado->id_tipo}'>{$dado->descritivo}</option>";
				}
			?>
			</select>
			<br>
			<div><?php echo $msg!=""?$msg:""?></div>
			<br><br>
			<input type="submit" value="Pesquisar">
		</form>
	</body>
</html>