<?php
	require_once "models/Componente.php";
	require_once "models/ul.class.php";
	require_once "models/li.class.php";
	require_once "models/a.class.php";
	class inicioController
	{
		public function inicio()
		{
			
			$ul = new ul();
			$ul->setElemento(new li(new a("index.php?controle=museuController&metodo=listar","Museus")));
			$ul->setElemento(new li(new a("index.php?controle=museuController&metodo=listar_tipo","Museus por Tipo")));
			
					
			require_once "views/menu.php";
		}
	}
?>