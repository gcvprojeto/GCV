<?php
class OpcionalVeiculo
{
   /*declara��o de atributos*/
	private $idOpcional;
	private $idVeiculo;

    /*M�todos get*/
    function getIdOpcional()
	{
		return $this->idOpcional;
    }
	
	function getIdVeiculo()
	{
		return $this->idVeiculo;
    }
	
    /*M�todos set*/
	function setIdOpcional($pIdOpcional)
	{
		$this->idOpcional = $pIdOpcional;
    }
	
	function setIdVeiculo($pIdVeiculo)
	{
		$this->idVeiculo = $pIdVeiculo;
    }
	
}
?>