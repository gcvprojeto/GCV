<?php
class Tabela
{
   /*declaraчуo de atributos*/
	private $idTabela;
	private $descricao;
	private $valor;

    /*Mщtodos get*/
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
	
    /*Mщtodos set*/
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