<?php
class Fisica
{
   /*declara��o de atributos*/
	private $idCliente;
	private $cpf;

    /*M�todos get*/
    function getIdCliente()
	{
		return $this->idCliente;
    }
	
	function getCpf()
	{
		return $this->cpf;
    }
	
    /*M�todos set*/
	function setIdCliente($pIdCliente)
	{
		$this->idCliente = $pIdCliente;
    }
	
	function setCpf($pCpf)
	{
		$this->cpf = $pCpf;
    }

}
?>