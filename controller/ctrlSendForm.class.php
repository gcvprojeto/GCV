<?php
class CtrlSendForm 
{

    function CtrlSendForm(){

    }
	
	public function MostraTela($model, $result=null, $Objects=null){
	
		$acao = htmlspecialchars($_REQUEST ['txtAcao']);
		$pagina = "../view/";

		/*Identificado o objeto */
		if ($model instanceof Cliente){
			$pagina = $pagina . "cliente";
		}elseif ($model instanceof Funcionario){
			$pagina = $pagina . "funcionario";
		}elseif ($model instanceof Opcional){
			$pagina = $pagina . "opcional";
		}elseif ($model instanceof OpcionalVeiculo){
			$pagina = $pagina . "opcionalveiculo";
		}elseif ($model instanceof Departamento){
			$pagina = $pagina . "departamento";
		}
			
		/*Identificado a ação*/
		if ($acao == "principal"){
			$pagina = $pagina . "Principal";
		}elseif ($acao == "detalhe"){
			$_array = $result;
			$pagina = $pagina . "Detalhe";
		}elseif ($acao == "listar"){
			$pagina = $pagina . "Listar";
		}			
			
		$pagina = $pagina.".php";
				
		require($pagina);
	}

	public function MostraTelaSite($model, $result=null, $Objects=null){
	
		$acao = htmlspecialchars($_REQUEST ['txtAcao']);
		$pagina = "";
		
		/*Identificado o objeto */
		if ($model instanceof Veiculo){
			/*Identificado a ação*/
			if ($acao == "siteListaVeiculo"){
				$pagina = "../view/principalListaCarro.php";
			}elseif ($acao == "siteDetalheVeiculo"){
				$_array = $result;
				$pagina = "../view/principalDetalheCarro.php";
			}			
		}

			
		require($pagina);
	}


	public function mostraMsg($model, $tipo)
	{
		$acao = htmlspecialchars($_REQUEST ['txtAcao']);
		$pagina = "../view/";
		$titulo = "";
		
		if ($tipo == "erro") {
			$texto = "Não foi possivel executar a sua solicitação";
		}else{
			$texto = "Solicitação executada com sucesso";
		}

//		Identificando Instacia do Objeto
		if ($model instanceof Cliente){
			$pagina = $pagina . "cliente";
			$titulo = "Cliente";
		}elseif ($model instanceof Funcionario){
			$pagina = $pagina . "funcionario";
			$titulo = "Funcionario";
		}elseif ($model instanceof Opcional){
			$pagina = $pagina . "opcional";
			$titulo = "Opcional";
		}elseif ($model instanceof OpcionalVeiculo){
			$pagina = $pagina . "opcionalveiculo";
			$titulo = "Opcional do Veiculo";
		}elseif ($model instanceof Departamento){
			$pagina = $pagina . "departamento";
			$titulo = "Departamento";
		}
			
//		Identificando a ação
		if ($acao == "principal"){
			$pagina = $pagina . "Principal";
			$titulo = "Pagina principal de " . $titulo;
		}elseif ($acao == "detalhe"){
			$_array = $result;
			$pagina = $pagina . "Detalhe";
			$titulo = "Detalhe do " . $titulo;
		}elseif ($acao == "listar"){
			$pagina = $pagina . "Listar";
			$titulo = "Lista de " . $titulo;
		}			
	
		$texto = "  Salvo com sucesso!";

//		$destino = $pagina;
		$destino = "$pagina";

		require("../view/mensagem.php");
	}
	
}
?>

