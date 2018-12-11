<?php
	require_once 'class/Card.class.php';

	$order = new Card('Danillo Leão Lopes', 1800);

	$order->ativarCartao();
	$order->comprar(250);
	$order->comprar(480.26);
	$order->desativarCartao();
	$order->comprar(3000);
	$order->ativarCartao();
	$order->comprar(2000);
	echo $order->getMsg()."<br>";