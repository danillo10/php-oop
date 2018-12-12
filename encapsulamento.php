<?php 

	require_once 'class/Cliente.class.php';
	require_once 'class/Conta.class.php';

	$cliente = new Cliente('Danillo Leão Lopes');
	$conta   = new Conta($cliente);

	$depositos = [1200];
	foreach ($depositos as $valores):
		$conta->depositar($valores);
	endforeach;

	$saques = [100];
	foreach($saques as $valores):
		$conta->sacar($valores);
	endforeach;

	$conta->exibir();

	echo "<hr>";

	echo "<pre>";
	var_dump($conta);	