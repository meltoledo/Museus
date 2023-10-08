<?php
	class form implements componente
	{
		function __construct(private string $action = "",
		 private string $method = "",
		  private array $elementos = array()){}
		
		function criar()
		{
			
				echo "<form action='{$this->action}' method='{$this->method}'>";
				foreach($this->elementos as $obj)
				{
					$obj->criar();
				}
				
				echo "</form>";
			
		}
		function setElementos($objeto)
		{
			$this->elementos[] = $objeto;
		}
	}
?>