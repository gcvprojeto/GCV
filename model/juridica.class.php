<?php
class Juridica
{
   /*declaraчуo de atributos*/
	private $idJuridica;
	private $cnpj;

    /*Mщtodos get*/
    function getIdCliente()
	{
		return $this->idCliente;
    }
	
	function getCnpj()
	{
		return $this->cnpj;
    }
	
    /*Mщtodos set*/
	function setIdCliente($pIdCliente)
	{
		$this->idCliente = $pIdCliente;
    }
	
	function setCnpj($pCnpj)
	{
		$this->cnpj = $pCnpj;
    }

}
?>