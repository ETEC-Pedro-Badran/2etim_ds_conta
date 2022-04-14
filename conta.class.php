<?php

class Conta {
   private $id;
   private $pago;
   private $venda;


   function __construct($id, $venda){
       $this->id = $id;
       $this->venda = $venda;
   }


   function quitar(){}

   function exibirTroco(){}

   function emitirRecibo(){}

   function  listarDivida($cliente){}


   function  listarContasEmAberto(){}

   
   function toString(){
       return "Conta $this->id do cliente ".
               $this->venda->getCliente()->getNome().
               " valor: ".$this->venda->getValor();
   }
  
}