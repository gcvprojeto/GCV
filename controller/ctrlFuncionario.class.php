<?php
//importanto a classe Model
include_once("../model/funcionario.class.php");
//importanto a classe DAO
include_once("../model/dao/daoFuncionario.class.php");
//importando o controller referente ao controle de sa�da de informa��o
include_once("ctrlSendForm.class.php");

/*Defini��o da Classe*/
class CtrlFuncionario
{

	/*Construtor*/
	function CtrlFuncionario(){

	}
	
	private function Verifica($pVariavel){	

		if((isset($_REQUEST[$pVariavel]))&&(!empty($_REQUEST[$pVariavel]))){		
			return htmlspecialchars($_REQUEST[$pVariavel]);		
		}else{		
			return "";
		}		

	}

	private function RequestForm($objFuncionario){
	
		/*Pegando os campos do formul�rio e colocando no model*/
		$objFuncionario->setIdFuncionario($this->Verifica('txtIdFuncionario'));
		$objFuncionario->setNome($this->Verifica('txtNome'));
		$objFuncionario->setLogin($this->Verifica('txtLogin'));
		$objFuncionario->setSenha($this->Verifica('txtSenha'));
		
	}

	/*fun��o para abrir a tela principal e carregar as informa��es necess�rias*/
	public function Principal(){
		/*Cria os objetos*/
		$objFuncionario = new Funcionario();
		$objDaoFuncionario = new DaoFuncionario();
	
		$objSendForm = new CtrlSendForm();
		$objSendForm->MostraTela($objFuncionario);
		
	}

	/*fun��o para gravar funcionario, obtem os dados do formul�rio*/
	public function Gravar()
	{
		/*Cria os objetos*/
		$objFuncionario = new Funcionario();
		$objDaoFuncionario = new DaoFuncionario();

		/*Pegando os campos do formul�rio e colocando no model*/
		$this->RequestForm($objFuncionario);

		/*Enviando os dados para o banco de dados*/
		$retorno = $objDaoFuncionario->Gravar($objFuncionario);
		/*Criando objeto para mostrar o resultado*/
		$objSendForm = new CtrlSendForm();
		
		/*Verificado o resultado do processamento*/
		if ($retorno > 0){
			$objSendForm->mostraMsg($objFuncionario, "OK");
		}else{
			$objSendForm->mostraMsg($objFuncionario, "ERRO");
		}

    }
	
	/*Fun��o para listar os dados, obtem os dados do banco de dados e envia para a tela*/
	public function Listar() 
	{
		/*Cria os objetos*/
        $objFuncionario = new Funcionario();
		$objDaoFuncionario = new DaoFuncionario();

		/*Solicitando dados para o banco de dados*/
		$retorno = $objDaoFuncionario->Listar();

		/*Criando objeto para mostrar o resultado*/
		$objSendForm = new CtrlSendForm();

		/*Verificado o resultado do processamento*/
		if ($retorno > 0){
			$objSendForm->MostraTela($objFuncionario, $retorno);
		}else{
			$objSendForm->mostraMsg($objFuncionario, "INFO");
		}

    }

	public function Detalhe() 
	{
        /*Cria os objetos*/
        $objFuncionario = new Funcionario();
		$objDaoFuncionario = new DaoFuncionario();

		/*Pegando os campos do formul�rio e colocando no model*/
		$this->RequestForm($objFuncionario);
		
		/*Enviando para o banco de dados*/
		$retorno = $objDaoFuncionario->Detalhe($objFuncionario);

		/*Criando objeto para mostrar o resultado*/
		$objSendForm = new CtrlSendForm();

		/*Verificado o resultado do processamento*/
		if ($retorno > 0){
			$objSendForm->MostraTela($objFuncionario, $retorno);
		}else{
			$objSendForm->mostraMsg($objFuncionario, "erro");
		}

    }
	
	public function Alterar() 
	{
        /*Cria os objetos*/
        $objFuncionario = new Funcionario();
		$objDaoFuncionario = new DaoFuncionario();

		/*Pegando os campos do formul�rio e colocando no model*/
		$this->RequestForm($objFuncionario);

		/*Enviando para o banco de dados*/
		$retorno = $objDaoFuncionario->Alterar($objFuncionario);

		/*Criando objeto para mostrar o resultado*/
		$objSendForm = new CtrlSendForm();

		/*Verificado o resultado do processamento*/
		if ($retorno > 0){
			$objSendForm->mostraMsg($objFuncionario, "OK");
		}else{
			$objSendForm->mostraMsg($objFuncionario, "ERRO");
		}

    }
	
	public function Excluir() 
	{
        /*Cria os objetos*/
        $objFuncionario = new Funcionario();
		$objDaoFuncionario = new DaoFuncionario();

		/*Pegando os campos do formul�rio e colocando no model*/
		$this->RequestForm($objFuncionario);
		
		/*Enviando para o banco de dados*/
		$retorno = $objDaoFuncionario->Excluir($objFuncionario);

		/*Criando objeto para mostrar o resultado*/
		$objSendForm = new CtrlSendForm();

		if ($retorno > 0){
			$objSendForm->mostraMsg($objFuncionario, "OK");
		}else{
			$objSendForm->mostraMsg($objFuncionario, "ERRO");
		}

    }
	
	public function login() 
	{
        /*Cria os objetos*/
        $objFuncionario = new Funcionario();
		$objDaoFuncionario = new DaoFuncionario();

		/*Pegando os campos do formul�rio e colocando no model*/
		$this->RequestForm($objFuncionario);
		
		/*Enviando para o banco de dados*/
		$retorno = $objDaoFuncionario->Login($objFuncionario);

		/*Criando objeto para mostrar o resultado*/
		$objSendForm = new CtrlSendForm();
		
		/*Verificado o resultado do processamento*/
		if ($retorno > 0){
			$objSendForm->mostraMsg($objFuncionario, "OK");
		}else{
			$objSendForm->mostraMsg($objFuncionario, "ERRO");
		}

    }
	
}
?>