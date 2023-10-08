<?php
	class Museu
	{
		public function __construct(private int $id_museu = 0, private string $nome = "", private string $pais = "",  private $tipo = null){}
		
		//gets
		
		public function getIdmuseu()
		{
			return $this->id_museu;
		}
		
		public function getNome()
		{
			return $this->nome;
		}
		public function getPais()
		{
			return $this->pais;
		}
		public function getTipo()
		{
			return $this->tipo;
		}
		
		
	}
?>