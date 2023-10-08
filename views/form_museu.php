<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Museu</title>
		<style>
			div{color:red; font-size:11px;}
		</style>
	</head>
	<body>
		<h1>Museu</h1>
		<form action="#" method="post">
			<label>Nome:</label>
			<input type="text" name="nome">
			<br>
			<div><?php echo $msg[0]!=""?$msg[0]:""?></div>
			<br><br>
			<label>País:</label>
			<input type="text" name="pais">
			<br>
			<div><?php echo $msg[1]!=""?$msg[1]:""?></div>
			<br><br>
			<label>Tipo:</label>
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
			<div><?php echo $msg[2]!=""?$msg[2]:""?></div>
			<br><br>
			<input type="submit" value="Inserir">
		</form>
	</body>
</html>