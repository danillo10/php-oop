<?php

require_once 'Principal.class.php';

class Fornecedor extends Principal{
	private $produtos;
	private $representante;

    /**
     * @return mixed
     */
    public function getProdutos()
    {
        return $this->produtos;
    }

    /**
     * @param mixed $produtos
     *
     * @return self
     */
    public function setProdutos($produtos)
    {
        $this->produtos = $produtos;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getRepresentante()
    {
        return $this->representante;
    }

    /**
     * @param mixed $representante
     *
     * @return self
     */
    public function setRepresentante($representante)
    {
        $this->representante = $representante;

        return $this;
    }

}