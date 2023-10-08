<?php
	class tipoDAO 
	{
		public function __construct(private $conexao){}
				
		public function buscar_todos_tipos()
		{
			$sql = "SELECT * FROM  tipo";
			try
			{
				$stm = $this->conexao->prepare($sql);
				
				$stm->execute();
				
				$this->conexao = null;
				
				return $stm->fetchAll(PDO::FETCH_OBJ);
			}
			catch(PDOException $e)
			{
				//echo $e->getCode();
				//echo $e->getMessage();
				//die();
				return "Problema ao buscar os tipos de museu";
			}
		}
		
	}//fim classe
?>