<?php

class School{

	private $nome;

	public function __construct($s){
		$this->setNome($s);
	}

	public function setNome($s)
	{
		$this->nome = $s;
	}

	public function getNome($s)
	{
		return $this->nome;
	}

}