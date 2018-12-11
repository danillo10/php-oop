<?php

class Car {

	private $ligado, $vAtual, $vMax, $msg;

	public function __construct($vm){
		$this->setLigado("Carro Desligado");
		$this->setVatual(0);
		$this->setVmax($vm);
	}

	public function setLigado($ligado)
	{
		$this->ligado = $ligado;
	}

	public function setVatual($vAtual)
	{
		$this->vAtual = $vAtual;
	}

	public function setVmax($vMax)
	{
		$this->vMax = $vMax;
	}

	public function setMsg($msg)
	{
		$this->msg = $msg;
	}

	public function getLigado()
	{
		return $this->ligado;
	}

	public function getVatual()
	{
		return $this->vAtual;
	}

	public function getVmax()
	{
		return $this->vMax;		
	}

	public function getMsg()
	{
		return $this->msg;
	}

	public function acelerar($velocidade)
	{
		if($this->getLigado() == "Carro Ligado"):
			if($this->getVatual() + $velocidade < $this->getVmax()):
				$this->setVatual($this->getVatual() + $velocidade);
				$this->setMsg("Acelerando...");
			else:
				$this->setVatual($this->getVmax());
				$this->setMsg("Velocidade máxima atingida!");
			endif;
		else:
			$this->setMsg("O carro está desligado!");
		endif;
	}

	public function ligar()
	{
		$this->setLigado("Carro Ligado");
	}

	public function desligar()
	{
		$this->setLigado("Carro Desligado");
	}

	public function detalhes()
	{
		echo "Status: {$this->getLigado()}<br>";
		echo "Vel. Máx:{$this->getVmax()}<br>";
		echo "Vel. Atual:{$this->getVatual()}<br>";
		echo "Msg: {$this->getMsg()}<br>";
	}
}