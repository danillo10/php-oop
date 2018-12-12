<?php

require_once 'Principal.class.php';

class Funcionario  extends Principal{

	private $cargo; 
	private $salario;


    /**
     * @return mixed
     */
    public function getCargo()
    {
        return $this->cargo;
    }

    /**
     * @param mixed $cargo
     *
     * @return self
     */
    public function setCargo($cargo)
    {
        $this->cargo = $cargo;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSalario()
    {
        return $this->salario;
    }

    /**
     * @param mixed $salario
     *
     * @return self
     */
    public function setSalario($salario)
    {
        $this->salario = $salario;

        return $this;
    }
}