<?php
class Juridica
{
   /*declara��o de atributos*/
	private $idJuridica;
	private $cnpj;

    /*M�todos get*/
    function getIdCliente()
	{
		return $this->idCliente;
    }
	
	function getCnpj()
	{
		return $this->cnpj;
    }
	
    /*M�todos set*/
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