<?php

	require_once 'class/Customer.class.php';

	$customer = new Customer();

	$customer->validar('Danillo','danillo_10_@hotmail.com');
	// $customer->nome = "Modificou o atributo Nome";
	$customer->exibir();