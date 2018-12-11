<?php

class Car {

	private $ligado, $vAtual, $vMax, $msg;

	public function __construct(){

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
}