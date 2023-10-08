<?php
	require_once "models/Conexao.class.php";
	require_once "models/museuDAO.class.php";
	require_once "models/Museu.class.php";
	require_once "models/tipoDAO.class.php";
	require_once "models/Tipo.class.php";
	class museuController
	{
		private $parm;
		public function __construct()
		{
			$this->parm = Conexao::getInstancia();
		}
		public function listar()
		{
			$museuDAO = new museuDAO($this->parm);
			$retorno = $museuDAO->buscar_todos_museus();
			if(!is_array($retorno))
			{
				echo $retorno;
			}
			else
			{
				require_once "views/listar_museus.php";
			}
		}
		public function inserir()
		{
			$msg = array("","","");
			$erro = false;
			if($_POST)
			{
				if(empty($_POST["nome"]))
				{
					$msg[0] = "Preecha o nome";
					$erro = true;
				}
				if(empty($_POST["pais"]))
				{
					$msg[1] = "Preecha o país";
					$erro = true;
				}
				
				if($_POST["tipo"] == "0")
				{
					$msg[2] = "Escolha um tipo para o museu";
					$erro = true;
				}
				if(!$erro)
				{
					//inserir no BD
					$tipo = new Tipo($_POST["tipo"]);
					$museu = new museu(nome:$_POST["nome"], pais:$_POST["pais"], tipo:$tipo);
					
					$museuDAO = new museuDAO($this->parm);
					$museuDAO->cadastrar($museu);
					header("location:index.php?controle=museuController&metodo=listar");
				}
				
			}
			$tipoDAO = new tipoDAO($this->parm);
			$retorno =  $tipoDAO->buscar_todos_tipos();
			require_once "views/form_museu.php";
		}//fim do inserir
		
		public function listar_tipo()
		{
			$msg = "";
			if($_POST)
			{
				if($_POST["tipo"] == "0")
				{
					$msg = "Escolha um tipo de museu";
					
				}
				else
				{
					$tipo = new Tipo($_POST["tipo"]);
					$museu = new museu(tipo:$tipo);
					$museuDAO = new museuDAO($this->parm);
					$retorno = $museuDAO->buscar_museus_tipo($museu);
				
					if(is_array($retorno))
					{
						if(count($retorno) > 0)
						{
							require_once "views/listar_museus_tipo.php";
						}
						else
						{
							echo "<h1>Não há museus cadastrados para o tipo escolhido</h1>";
						}
					}
					else
					{
						echo "<h1>$retorno</h1>";
					}
				}
			}//fim if
			else
			{
				$tipoDAO = new tipoDAO($this->parm);
				$retorno =  $tipoDAO->buscar_todos_tipos();
				require_once "views/form_tipo.php";
			}
			
			
		}//fim listar_tipo
		
		
	}//fim da classe
?>