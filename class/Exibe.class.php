<?php

class Exibe{

	private $pessoa, $nome;

	public function __construct($nome){
		$this->setPessoa(new Pessoa());
		$this->setNome($nome);
	}

	public function setPessoa($p)
	{
		$this->pessoa = $p;
	}

	public function setNome($n)
	{
		$this->nome = $n;
	}

	public function getPessoa()
	{
		return $this->pessoa;
	}

	public function getNome()
	{
		return $this->nome;
	}

	public function exibir()
	{
		echo $this->getPessoa()->configura($this->getNome());
	}

}