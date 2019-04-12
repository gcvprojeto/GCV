<?php

//importanto a classe Model
include_once("../model/departamento.class.php");
//importanto a classe DAO
include_once("../model/dao/daoDepartamento.class.php");
//importando o controller referente ao controle de sa�da de informa��o
include_once("ctrlSendForm.class.php");

class CtrlDepartamento {

    function CtrlDepartamento() {
        
    }

    private function Verifica($pVariavel) {

        if ((isset($_REQUEST[$pVariavel])) && (!empty($_REQUEST[$pVariavel]))) {
            return htmlspecialchars($_REQUEST[$pVariavel]);
        } else {
            return "";
        }
    }

    private function RequestForm($objFuncionario) {

//      Setando os campos do Formulário no model!
        $objFuncionario->setIdDepartamento($this->Verifica("txtIdDepartamento"));
        $objFuncionario->setNome($this->Verifica('txtNome'));
        $objFuncionario->setResponsavel($this->Verifica('txtResponsavel'));
    }

    public function Principal() {
//      Cria os objetos 
        $objDepartamento = new Departamento();
        $objSendForm = new CtrlSendForm();
        $objSendForm->MostraTela($objDepartamento);
    }

    public function Gravar() {
//      Cria os Objetos
        $objDepatamento = new Departamento();
        $objDaoDeparamento = new DaoDepartamento();

//       Setando os campos do Formulário no Model
        $this->RequestForm($objDepatamento);

//        Enviando para o banco de dados
        $retorno = $objDaoDeparamento->Gravar($objDepatamento);

//       Criando o objeto para mostrar na tela
        $objSendForm = new CtrlSendForm();

//        Verificando resultado do processo
        if ($retorno > 0) {
            $objSendForm->mostraMsg($objDepatamento, "OK");
        } else {
            $objSendForm->mostraMsg($objDepatamento, "ERRO");
        }
    }

    public function Listar() {
//         Cria os objetos
        $objDepartamento = new Departamento();
        $objDaoDepartamento = new DaoDepartamento();

//      Realizar busca no BD
        $retorno = $objDaoDepartamento->Listar();

//      Criando objeto para mostrar o resultado 
        $objSendForm = new CtrlSendForm();

//      Verificado o resultado do processamento
        if ($retorno > 0) {
            $objSendForm->MostraTela($objDepartamento, $retorno);
        } else {
            $objSendForm->mostraMsg($objDepartamento, "INFO");
        }
    }

    public function Detalhe() {
        /* Cria os objetos */
        $objFuncionario = new Funcionario();
        $objDaoFuncionario = new DaoFuncionario();

        /* Pegando os campos do formul�rio e colocando no model */
        $this->RequestForm($objFuncionario);

        /* Enviando para o banco de dados */
        $retorno = $objDaoFuncionario->Detalhe($objFuncionario);

        /* Criando objeto para mostrar o resultado */
        $objSendForm = new CtrlSendForm();

        /* Verificado o resultado do processamento */
        if ($retorno > 0) {
            $objSendForm->MostraTela($objFuncionario, $retorno);
        } else {
            $objSendForm->mostraMsg($objFuncionario, "erro");
        }
    }

    public function Alterar() {
        /* Cria os objetos */
        $objFuncionario = new Funcionario();
        $objDaoFuncionario = new DaoFuncionario();

        /* Pegando os campos do formul�rio e colocando no model */
        $this->RequestForm($objFuncionario);

        /* Enviando para o banco de dados */
        $retorno = $objDaoFuncionario->Alterar($objFuncionario);

        /* Criando objeto para mostrar o resultado */
        $objSendForm = new CtrlSendForm();

        /* Verificado o resultado do processamento */
        if ($retorno > 0) {
            $objSendForm->mostraMsg($objFuncionario, "OK");
        } else {
            $objSendForm->mostraMsg($objFuncionario, "ERRO");
        }
    }

    public function Excluir() {
        /* Cria os objetos */
        $objDepartamento = new Departamento();
        $objDaoDepartamento = new DaoDepartamento();

        /* Pegando os campos do formul�rio e colocando no model */
        $this->RequestForm($objDepartamento);

        /* Enviando para o banco de dados */
        $retorno = $objDaoDepartamento->Excluir($objDepartamento);

        /* Criando objeto para mostrar o resultado */
        $objSendForm = new CtrlSendForm();

        if ($retorno > 0) {
            $objSendForm->mostraMsg($objFuncionario, "OK");
        } else {
            $objSendForm->mostraMsg($objFuncionario, "ERRO");
        }
    }

    public function login() {
        /* Cria os objetos */
        $objFuncionario = new Funcionario();
        $objDaoFuncionario = new DaoFuncionario();

        /* Pegando os campos do formul�rio e colocando no model */
        $this->RequestForm($objFuncionario);

        /* Enviando para o banco de dados */
        $retorno = $objDaoFuncionario->Login($objFuncionario);

        /* Criando objeto para mostrar o resultado */
        $objSendForm = new CtrlSendForm();

        /* Verificado o resultado do processamento */
        if ($retorno > 0) {
            $objSendForm->mostraMsg($objFuncionario, "OK");
        } else {
            $objSendForm->mostraMsg($objFuncionario, "ERRO");
        }
    }

}

?>