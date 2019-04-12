<?php
class TabelaVeiculo
{
   /*declaraчуo de atributos*/
	private $idTabela;
	private $idVeiculo;

    /*Mщtodos get*/
    function getIdTabela()
	{
		return $this->idTabela;
    }
	
	function getIdVeiculo()
	{
		return $this->idVeiculo;
    }
	
    /*Mщtodos set*/
	function setIdTabela($pIdTabela)
	{
		$this->idTabela = $pIdTabela;
    }
	
	function setIdVeiculo($pIdVeiculo)
	{
		$this->idVeiculo = $pIdVeiculo;
    }
	
}
?>