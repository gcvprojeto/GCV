<?php
class Opcional
{
   /*declara��o de atributos*/
	private $idOpcional;
	private $descricao;

    /*M�todos get*/
    function getIdOpcional()
	{
		return $this->idOpcional;
    }
	
	function getDescricao()
	{
		return $this->descricao;
    }
	
    /*M�todos set*/
	function setIdOpcional($pIdOpcional)
	{
		$this->idOpcional = $pIdOpcional;
    }
	
	function setDescricao($pDescricao)
	{
		$this->descricao = $pDescricao;
    }

}
?>