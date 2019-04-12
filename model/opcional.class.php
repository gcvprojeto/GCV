<?php
class Opcional
{
   /*declaraчуo de atributos*/
	private $idOpcional;
	private $descricao;

    /*Mщtodos get*/
    function getIdOpcional()
	{
		return $this->idOpcional;
    }
	
	function getDescricao()
	{
		return $this->descricao;
    }
	
    /*Mщtodos set*/
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