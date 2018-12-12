<?php

	require_once 'class/autoload.php';

	$funcionario = new Funcionario();
	$cliente = new Comprador();
	$fornecedor = new Fornecedor();

	echo "<pre>";
	var_dump($funcionario);
	echo "<hr>";
	var_dump($cliente);
	echo "<hr>";
	var_dump($fornecedor);