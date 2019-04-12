<?php
//importanto a classe Model
include_once("../model/cliente.class.php");
//importanto a classe DAO
include_once("../model/dao/daoCliente.class.php");
//importando o controller referente ao controle de sa�da de informa��o
include_once("ctrlSendForm.class.php");

/*Defini��o da Classe*/
class CtrlCliente
{

	/*Construtor*/
	function CtrlCliente(){

	}

	private function Verifica($pVariavel){	

		if((isset($_REQUEST[$pVariavel]))&&(!empty($_REQUEST[$pVariavel]))){		
			return htmlspecialchars($_REQUEST[$pVariavel]);		
		}else{		
			return "";
		}		

	}

	private function RequestForm($objCliente){
	
		/*Pegando os campos do formul�rio e colocando no model*/
		$objCliente->setIdCliente($this->Verifica('txtIdCliente'));
		$objCliente->setNome($this->Verifica('txtNome'));
		$objCliente->setRua($this->Verifica('txtRua'));
		$objCliente->setNumero($this->Verifica('txtNumero'));
		$objCliente->setComplemento($this->Verifica('txtComplemento'));
		$objCliente->setBairro($this->Verifica('txtBairro'));
		$objCliente->setCep($this->Verifica('txtCep'));
		$objCliente->setCidade($this->Verifica('txtCidade'));
		$objCliente->setEstado($this->Verifica('txtEstado'));
		$objCliente->setFoneResidencial($this->Verifica('txtFoneResidencial'));
		$objCliente->setFoneCelular($this->Verifica('txtFoneCelular'));
		$objCliente->setFoneReferencia($this->Verifica('txtFoneReferencia'));
		
	}

	/*fun��o para abrir a tela principal e carregar as informa��es necess�rias*/
	public function Principal(){
		/*Cria os objetos*/
		$objCliente = new Cliente();
		$objDaoCliente = new DaoCliente();
	
		$objSendForm = new CtrlSendForm();
		$objSendForm->MostraTela($objCliente);
		
	}

	/*fun��o para gravar funcionario, obtem os dados do formul�rio*/
	public function Gravar()
	{
		/*Cria os objetos*/
		$objCliente = new Cliente();
		$objDaoCliente = new DaoCliente();

		/*Pegando os campos do formul�rio e colocando no model*/
		$this->RequestForm($objCliente);

		/*Enviando os dados para o banco de dados*/
		$retorno = $objDaoCliente->Gravar($objCliente);
		/*Criando objeto para mostrar o resultado*/
		$objSendForm = new CtrlSendForm();
		
		/*Verificado o resultado do processamento*/
		if ($retorno > 0){
			$objSendForm->mostraMsg($objCliente, "OK");
		}else{
			$objSendForm->mostraMsg($objCliente, "ERRO");
		}

    }
	
	/*Fun��o para listar os dados, obtem os dados do banco de dados e envia para a tela*/
	public function Listar() 
	{
		/*Cria os objetos*/
        $objCliente = new Cliente();
		$objDaoCliente = new DaoCliente();

		/*Solicitando dados para o banco de dados*/
		$retorno = $objDaoCliente->Listar();

		/*Criando objeto para mostrar o resultado*/
		$objSendForm = new CtrlSendForm();
		
		/*Verificado o resultado do processamento*/
		if ($retorno > 0){
			$objSendForm->MostraTela($objCliente, $retorno);
		}else{
			$objSendForm->mostraMsg($objCliente, "INFO");
		}

    }

	public function Detalhe() 
	{
        /*Cria os objetos*/
        $objCliente = new Cliente();
		$objDaoCliente = new DaoCliente();

		/*Pegando os campos do formul�rio e colocando no model*/
		$this->RequestForm($objCliente);
		
		/*Enviando para o banco de dados*/
		$retorno = $objDaoCliente->Detalhe($objCliente);

		/*Criando objeto para mostrar o resultado*/
		$objSendForm = new CtrlSendForm();

		/*Verificado o resultado do processamento*/
		if ($retorno > 0){
			$objSendForm->MostraTela($objCliente, $retorno);
		}else{
			$objSendForm->mostraMsg($objCliente, "erro");
		}

    }
	
	public function Alterar() 
	{
        /*Cria os objetos*/
        $objCliente = new Cliente();
		$objDaoCliente = new DaoCliente();

		/*Pegando os campos do formul�rio e colocando no model*/
		$this->RequestForm($objCliente);

		/*Enviando para o banco de dados*/
		$retorno = $objDaoCliente->Alterar($objCliente);

		/*Criando objeto para mostrar o resultado*/
		$objSendForm = new CtrlSendForm();

		/*Verificado o resultado do processamento*/
		if ($retorno > 0){
			$objSendForm->mostraMsg($objCliente, "OK");
		}else{
			$objSendForm->mostraMsg($objCliente, "ERRO");
		}

    }
	
	public function Excluir() 
	{
        /*Cria os objetos*/
        $objCliente = new Cliente();
		$objDaoCliente = new DaoCliente();

		/*Pegando os campos do formul�rio e colocando no model*/
		$this->RequestForm($objCliente);
		
		/*Enviando para o banco de dados*/
		$retorno = $objDaoCliente->Excluir($objCliente);

		/*Criando objeto para mostrar o resultado*/
		$objSendForm = new CtrlSendForm();

		/*Verificado o resultado do processamento*/
		if ($retorno > 0){
			$objSendForm->mostraMsg($objCliente, "OK");
		}else{
			$objSendForm->mostraMsg($objCliente, "ERRO");
		}

    }
	
	/*Fun��o para listar os dados, obtem os dados do banco de dados e envia para a tela*/
	public function Pesquisa() {	
	
		/*Cria os objetos*/
        $objCliente = new Cliente();
		$objDaoCliente = new DaoCliente();

		/*Pegando os campos do formul�rio e colocando no model*/
		$this->RequestForm($objCliente);

		/*Solicitando dados para o banco de dados*/
		$retorno = $objDaoCliente->Pesquisa($objCliente);

		/*Criando objeto para mostrar o resultado*/
		$objSendForm = new CtrlSendForm();
		
		/*Verificado o resultado do processamento*/
		if ($retorno > 0){
			$objSendForm->mostraTela($objCliente, $retorno);
		}else{
			$objSendForm->mostraMsg($objCliente, "ERRO");
		}
		
    }
	
}
?>