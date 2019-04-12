<?php

/* Incluindo a classe de controle do Funcion�rio */
include_once("ctrlCliente.class.php");
include_once("ctrlFuncionario.class.php");
include_once("ctrlOpcional.class.php");
include_once("ctrlOpcionalVeiculo.class.php");
//	include_once("ctrlPreco.class.php");
include_once("ctrlDepartamento.class.php");

/* htmlspecialchars - Converte caracteres especiais para a realidade HTML */
/* $_REQUEST - Vari�veis de requisi��o HTTP */
/* Pegando a variavel que identifica o formul�rio que enviou os dados */
$formulario = htmlspecialchars($_REQUEST ['txtFormulario']);
/* Pegando a variavel que identifica a a��o do formul�rio que enviou os dados */
$acao = htmlspecialchars($_REQUEST ['txtAcao']);

/* identifica e cria objeto para classe de control */
if ($formulario == "cliente") {
    $objController = new CtrlCliente();
} elseif ($formulario == "funcionario") {
    $objController = new CtrlFuncionario();
} elseif ($formulario == "opcional") {
    $objController = new CtrlOpcional();
} elseif ($formulario == "opcionalveiculo") {
    $objController = new CtrlOpcionalVeiculo();
} elseif ($formulario == "preco") {
    $objController = new CtrlFuncionario();
} elseif ($formulario == "departamento") {
    $objController = new CtrlDepartamento();
}

/* identifica qual a��o est� sendo solicitada */
if ($acao == "principal")
    $objController->Principal();
elseif ($acao == "incluir")
    $objController->Gravar();
elseif ($acao == "alterar")
    $objController->Alterar();
elseif ($acao == "excluir")
    $objController->Excluir();
elseif ($acao == "listar")
    $objController->Listar();
elseif ($acao == "detalhe")
    $objController->Detalhe();
elseif ($acao == "pesquisa")
    $objController->Pesquisa();
elseif ($acao == "login")
    $objController->Login();
elseif ($acao == "siteListaVeiculo")
    $objController->SiteLista();
elseif ($acao == "siteDetalheVeiculo")
    $objController->SiteDetalhe();
?>
