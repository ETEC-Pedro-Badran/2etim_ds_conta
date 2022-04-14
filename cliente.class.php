<?php
class Cliente {
    private $id;
    private $bloqueado;
    private $motivoBloqueio;
    private $nome;
    private $rm;
    private $classe;

 

    function __construct($id, $bloqueado, $motivoBloqueio, $nome, $rm, $classe)
    {

        $this->id             = $id;
        $this->bloqueado      = $bloqueado;
        $this->motivoBloqueio = $motivoBloqueio;
        $this->nome           = $nome;
        $this->rm             = $rm;
        $this->classe         = $classe;
        
    }

    function negativar($motivo){
    }

    function incluir(){}

    function modificar(){}

    function getNome(){
        return $this->nome;
    }

}