<?php
class Tabela
{
   /*declara��o de atributos*/
	private $idTabela;
	private $descricao;
	private $valor;

    /*M�todos get*/
    function getIdTabela()
	{
		return $this->idTabela;
    }
	
	function getDescricao()
	{
		return $this->descricao;
    }
	
    function getValor()
	{
		return $this->valor;
    }
	
    /*M�todos set*/
	function setIdTabela($pIdTabela)
	{
		$this->idTabela = $pIdTabela;
    }
	
	function setDescricao($pDescricao)
	{
		$this->descricao = $pDescricao;
    }
	
	function setValor($pValor)
	{
		$this->valor = $pValor;
    }
	
}
?>