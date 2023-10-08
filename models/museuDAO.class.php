<?php
	class museuDAO 
	{
		public function __construct(private $conexao){}
				
		public function buscar_todos_museus()
		{
			$sql = "SELECT m.*, t.descritivo FROM museu as m, tipo as t WHERE m.tipo_idtipo = t.id_tipo";
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
				return "Problema ao buscar os museus";
			}
		}
		public function cadastrar($museu)
		{
			$sql = "INSERT INTO museu (tipo_idtipo, nome, pais) VALUES(?, ?, ?)";
			try
			{
				$stm = $this->conexao->prepare($sql);
				$stm->bindValue(1, $museu->getTipo()->getIdtipo());
				$stm->bindValue(2, $museu->getNome());
				$stm->bindValue(3, $museu->getPais());
				$stm->execute();
				$this->conexao = null;
			}
			catch(PDOException $e)
			{
				$this->conexao = null;
				return "Problema ao inserir Museu"; 
			}
		}
		
		public function buscar_museus_tipo($museu)
		{
			$sql = "SELECT m.*, t.descritivo FROM museu as m, tipo as t WHERE m.tipo_idtipo = ? AND m.tipo_idtipo = t.id_tipo";
			try
			{
				$stm = $this->conexao->prepare($sql);
				$stm->bindValue(1, $museu->gettipo()->getIdtipo());
				$stm->execute();
				
				$this->conexao = null;
				
				return $stm->fetchAll(PDO::FETCH_OBJ);
			}
			catch(PDOException $e)
			{
				//echo $e->getCode();
				//echo $e->getMessage();
				//die();
				return "Problema ao buscar os museus pelo tipo escolhido";
			}
		}
	}//fim classe
?>