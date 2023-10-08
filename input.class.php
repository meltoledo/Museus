<?php
	class input implements componente
	{
		function __construct(private string $type = "", private string $name = ""){}
		
		function criar()
		{
			if($this->name == "")
			{
				echo "<input type='{$this->type}'>";
			}
			else
			{
				echo "<input type='{$this->type}' name='{$this->name}'>";
			}
		}
	}
?>