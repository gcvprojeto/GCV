<?php
class Funcionario
{
   /*declara��o de atributos*/
	private $idFuncionario;
	private $nome;
    private $login;
    private $senha;

    /*M�todos get*/
    function getIdFuncionario()
	{
		return $this->idFuncionario;
    }

	function getNome()
	{
		return $this->nome;
    }

    function getLogin()
	{
		return $this->login;
    }

    function getSenha()
	{
		return $this->senha;
    }

    /*M�todos set*/
	function setIdFuncionario($pIdFuncionario)
	{
		$this->idFuncionario = $pIdFuncionario;
    }

    function setNome($pNome) 
	{
		$this->nome = $pNome;
    }

    function setLogin($pLogin)
	{
		$this->login = $pLogin;
    }

    function setSenha($pSenha)
	{
		$this->senha = $pSenha;
    }

}
?>