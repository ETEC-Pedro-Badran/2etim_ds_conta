<?php
require 'cliente.class.php';
require 'venda.class.php';
require 'conta.class.php';


$cliente = new Cliente(1, null,null,"Fulano de Tal",32131,"DS");

$venda = new Venda();

$venda->incluir($cliente,10.0);

$conta = new Conta(1,$venda);

echo $conta->toString();


