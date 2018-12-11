<?php

class Customer {
	var $nome, $email;

	public function validar($nome, $email)
	{
		$this->nome = $nome;
		$this->email = $email;	
	}

	public function exibir()
	{
		echo $this->nome . " - " . $this->email;		
	}
}