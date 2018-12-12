<?php

class Cart{

	private $produtos;

	public function adiciona(Product $produto)
	{
		$this->produtos[] = $produto;
	}

	public function exibe()
	{
		foreach($this->produtos as $produto):
			echo $produto->getNome().'<br>';
		endforeach;
	}

}