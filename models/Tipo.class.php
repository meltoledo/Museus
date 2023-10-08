<?php
	class Tipo
	{
		public function __construct(private int $id_tipo = 0, private string $descritivo = ""){}
		
		//gets
		
		public function getIdtipo()
		{
			return $this->id_tipo;
		}
		
		public function getDescritivo()
		{
			return $this->descritivo;
		}
		
		
	}
?>