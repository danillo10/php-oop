<?php

	require_once 'class/Product.class.php';
	require_once 'class/Cart.class.php';

	$produto1 = new Product('Computador');
	$produto2 = new Product('Mouse');

	$carrinho = new Cart();

	$carrinho->adiciona($produto1);
	$carrinho->adiciona($produto2);
	$carrinho->exibe();

	echo "<hr>";