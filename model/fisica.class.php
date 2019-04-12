<?php
class Fisica
{
   /*declaraчуo de atributos*/
	private $idCliente;
	private $cpf;

    /*Mщtodos get*/
    function getIdCliente()
	{
		return $this->idCliente;
    }
	
	function getCpf()
	{
		return $this->cpf;
    }
	
    /*Mщtodos set*/
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