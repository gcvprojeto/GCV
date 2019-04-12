<?php
//importanto a classe Model
include_once("../model/opcionalVeiculo.class.php");
//importanto a classe DAO
include_once("../model/dao/daoOpcionalVeiculo.class.php");
//importando o controller referente ao controle de saída de informação
include_once("ctrlSendForm.class.php");

/*Definição da Classe*/
class CtrlOpcionalVeiculo
{

	/*Construtor*/
	function CtrlOpcionalVeiculo(){

	}

	private function Verifica($pVariavel){	

		if((isset($_REQUEST[$pVariavel]))&&(!empty($_REQUEST[$pVariavel]))){		
			return htmlspecialchars($_REQUEST[$pVariavel]);		
		}else{		
			return "";
		}		

	}

	private function RequestForm($objOpcionalVeiculo){
	
		/*Pegando os campos do formulário e colocando no model*/
		$objOpcionalVeiculo->setIdOpcional($this->Verifica('txtIdOpcional'));
		$objOpcionalVeiculo->setIdVeiculo($this->Verifica('txtIdVeiculo'));
		
	}

	/*função para abrir a tela principal e carregar as informações necessárias*/
	public function Principal(){
		/*Cria os objetos*/
		$objOpcionalVeiculo = new OpcionalVeiculo();
		$objDaoOpcionalVeiculo = new DaoOpcionalVeiculo();
	
		$objSendForm = new CtrlSendForm();
		$objSendForm->MostraTela($objOpcionalVeiculo);
		
	}

	/*função para gravar funcionario, obtem os dados do formulário*/
	public function Gravar()
	{
		/*Cria os objetos*/
		$objOpcionalVeiculo = new OpcionalVeiculo();
		$objDaoOpcionalVeiculo = new DaoOpcionalVeiculo();

		/*Pegando os campos do formulário e colocando no model*/
		$this->RequestForm($objOpcionalVeiculo);

		/*Enviando os dados para o banco de dados*/
		$retorno = $objDaoOpcionalVeiculo->Gravar($objOpcionalVeiculo);
		/*Criando objeto para mostrar o resultado*/
		$objSendForm = new CtrlSendForm();
		
		/*Verificado o resultado do processamento*/
		if ($retorno > 0){
			$objSendForm->mostraMsg($objOpcionalVeiculo, "OK");
		}else{
			$objSendForm->mostraMsg($objOpcionalVeiculo, "ERRO");
		}

    }
	
	/*Função para listar os dados, obtem os dados do banco de dados e envia para a tela*/
	public function Listar() 
	{
		/*Cria os objetos*/
        $objOpcionalVeiculo = new OpcionalVeiculo();
		$objDaoOpcionalVeiculo = new DaoOpcionalVeiculo();

		/*Solicitando dados para o banco de dados*/
		$retorno = $objDaoOpcionalVeiculo->Listar();

		/*Criando objeto para mostrar o resultado*/
		$objSendForm = new CtrlSendForm();
		
		/*Verificado o resultado do processamento*/
		if ($retorno > 0){
			$objSendForm->MostraTela($objOpcionalVeiculo, $retorno);
		}else{
			$objSendForm->mostraMsg($objOpcionalVeiculo, "INFO");
		}

    }

	public function Detalhe() 
	{
        /*Cria os objetos*/
        $objOpcionalVeiculo = new OpcionalVeiculo();
		$objDaoOpcionalVeiculo = new DaoOpcionalVeiculo();

		/*Pegando os campos do formulário e colocando no model*/
		$this->RequestForm($objOpcionalVeiculo);
		
		/*Enviando para o banco de dados*/
		$retorno = $objDaoOpcionalVeiculo->Detalhe($objOpcionalVeiculo);

		/*Criando objeto para mostrar o resultado*/
		$objSendForm = new CtrlSendForm();

		/*Verificado o resultado do processamento*/
		if ($retorno > 0){
			$objSendForm->MostraTela($objOpcionalVeiculo, $retorno);
		}else{
			$objSendForm->mostraMsg($objOpcionalVeiculo, "erro");
		}

    }
	
	public function Alterar() 
	{
        /*Cria os objetos*/
        $objOpcionalVeiculo = new OpcionalVeiculo();
		$objDaoOpcionalVeiculo = new DaoOpcionalVeiculo();

		/*Pegando os campos do formulário e colocando no model*/
		$this->RequestForm($objOpcionalVeiculo);

		/*Enviando para o banco de dados*/
		$retorno = $objDaoOpcionalVeiculo->Alterar($objOpcionalVeiculo);

		/*Criando objeto para mostrar o resultado*/
		$objSendForm = new CtrlSendForm();

		/*Verificado o resultado do processamento*/
		if ($retorno > 0){
			$objSendForm->mostraMsg($objOpcionalVeiculo, "OK");
		}else{
			$objSendForm->mostraMsg($objOpcionalVeiculo, "ERRO");
		}

    }
	
	public function Excluir() 
	{
        /*Cria os objetos*/
        $objOpcionalVeiculo = new OpcionalVeiculo();
		$objDaoOpcionalVeiculo = new DaoOpcionalVeiculo();

		/*Pegando os campos do formulário e colocando no model*/
		$this->RequestForm($objOpcionalVeiculo);
		
		/*Enviando para o banco de dados*/
		$retorno = $objDaoOpcionalVeiculo->Excluir($objOpcionalVeiculo);

		/*Criando objeto para mostrar o resultado*/
		$objSendForm = new CtrlSendForm();

		/*Verificado o resultado do processamento*/
		if ($retorno > 0){
			$objSendForm->mostraMsg($objOpcionalVeiculo, "OK");
		}else{
			$objSendForm->mostraMsg($objOpcionalVeiculo, "ERRO");
		}

    }
	
	/*Função para listar os dados, obtem os dados do banco de dados e envia para a tela*/
	public function Pesquisa() {	
	
		/*Cria os objetos*/
        $objOpcionalVeiculo = new OpcionalVeiculo();
		$objDaoOpcionalVeiculo = new DaoOpcionalVeiculo();

		/*Pegando os campos do formulário e colocando no model*/
		$this->RequestForm($objOpcionalVeiculo);

		/*Solicitando dados para o banco de dados*/
		$retorno = $objDaoOpcionalVeiculo->Pesquisa($objOpcionalVeiculo);

		/*Criando objeto para mostrar o resultado*/
		$objSendForm = new CtrlSendForm();
		
		/*Verificado o resultado do processamento*/
		if ($retorno > 0){
			$objSendForm->mostraTela($objOpcionalVeiculo, $retorno);
		}else{
			$objSendForm->mostraMsg($objOpcionalVeiculo, "ERRO");
		}
		
    }
	
}
?>