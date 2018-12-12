<?php

class Card{

	private $status, $titular, $saldo, $msg;

	public function __construct($t, $s){
		$this->setStatus('Cartão Desativado');
		$this->setTitular($t);
		$this->setSaldo($s);
	} 

	public function setStatus($s)
	{
		$this->status = $s;
	}

	public function setTitular($t)
	{
		$this->titular = $t;
	}

	public function setSaldo($s)
	{
		$this->saldo = $s;
	}

	public function setMsg($m)
	{
		$this->msg = $m;
	}

	public function getStatus()
	{
		return $this->status;
	}

	public function getTitular()
	{
		return $this->titular;
	}

	public function getSaldo()
	{
		return $this->saldo;
	}

	public function getMsg()
	{
		return $this->msg;
	}

	public function comprar($v)
	{
		if($this->getStatus() == 'Cartão Ativado'):
			if($this->getSaldo() >= $v):
				$this->setSaldo($this->getSaldo() - $v);
				$this->setMsg('Compra no valor de R$ '.$v.' efetuada com sucesso!')."<br>";
			else:
				$this->setMsg('Saldo Insuficiente!');
			endif;
		else:
			$this->setMsg('Cartão Desativado');
		endif;
	}

	public function ativarCartao()
	{
		$this->setStatus('Cartão Ativado');
	}

	public function desativarCartao()
	{
		$this->setStatus('Cartão Desativado');
	}

}