<?php
class Departamento
{
//    Atributos
    private $idDepartamento;
    private $nome;
    private $responsavel;

//    Metódos Getters e Setters
    function setIdDepartamento($idDepartamento) {
        $this->idDepartamento = $idDepartamento;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function getIdDepartamento() {
        return $this->idDepartamento;
    }

    function getNome() {
        return $this->nome;
    }
    
    function getResponsavel() {
        return $this->responsavel;
    }

    function setResponsavel($responsavel) {
        $this->responsavel = $responsavel;
    }



}
?>