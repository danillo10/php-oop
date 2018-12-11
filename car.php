<?php
	require_once 'class/Car.class.php';

	$ferrari = new Car(330);
	$lamborghini= new Car(330);

	$ferrari->ligar();
	// $ferrari->desligar();
	$ferrari->acelerar(280);
	$ferrari->acelerar(30);
	print_r($ferrari);
	echo "<br>";
	echo "-------------------------------------------------------------------<br>";
	$ferrari->detalhes();