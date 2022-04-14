<?php

class Venda {
    private $id;
    private $valor;
    private $dia;
    private $cliente;


    function __construct(){}



    function incluir($cliente, $valor){
        $this->cliente = $cliente;
        $this->valor   = $valor;
    }

    function receber(){}


    function registrar(){}

    function getValor(){
       return $this->valor;
    }

    function getCliente(){
        return $this->cliente;
    }
}
