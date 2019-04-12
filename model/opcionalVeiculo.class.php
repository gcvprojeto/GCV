<?php
class OpcionalVeiculo
{
   /*declaraчуo de atributos*/
	private $idOpcional;
	private $idVeiculo;

    /*Mщtodos get*/
    function getIdOpcional()
	{
		return $this->idOpcional;
    }
	
	function getIdVeiculo()
	{
		return $this->idVeiculo;
    }
	
    /*Mщtodos set*/
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