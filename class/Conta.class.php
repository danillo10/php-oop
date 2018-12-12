<?php

require_once 'Operacoes.php';

class Conta implements Operacoes{

	private $titular, $saldo, $msg;

	public function __construct($t){
		$this->setTitular($t);
		$this->setSaldo(0);
	}

	private function setTitular($t)
	{
		$this->titular = $t;
	}

	private function setSaldo($s)
	{
		$this->saldo = $s;
	}

	private function setMsg($m)
	{
		$this->msg = $m;
	}

	private function getTitular()
	{
		return $this->titular;
	}

	private function getSaldo()
	{
		return $this->saldo;
	}

	private function getMsg()
	{
		return $this->msg;
	}

	public function depositar($v)
	{
		$this->setSaldo($this->getSaldo() + $v);
	}

	public function sacar($v)
	{
		if($this->getSaldo() >= $v):
			$this->setSaldo($this->getSaldo() - $v);
		else:
			$this->setMsg('Saldo Insuficiente');
		endif;
	}

	public function exibir()
	{
		echo 'Titular: '.$this->getTitular()->getNome().'<br>';
		echo 'Saldo: R$ '.$this->getSaldo().'<br>';
		echo 'MSG: '.$this->getMsg();
	}

}