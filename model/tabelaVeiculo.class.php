<?php
class TabelaVeiculo
{
   /*declara��o de atributos*/
	private $idTabela;
	private $idVeiculo;

    /*M�todos get*/
    function getIdTabela()
	{
		return $this->idTabela;
    }
	
	function getIdVeiculo()
	{
		return $this->idVeiculo;
    }
	
    /*M�todos set*/
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