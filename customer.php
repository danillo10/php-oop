<?php

	require_once 'class/Customer.class.php';

	$customer = new Customer();

	$customer->validar('Danillo','d@h.com');
	$customer->exibir();