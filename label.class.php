<?php
	class label implements componente
	{
		function __construct(private string $texto = ""){}
		
		function criar()
		{
			echo "<label>{$this->texto}</label>";
		}
	}
?>