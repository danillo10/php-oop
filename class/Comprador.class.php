<?php

require_once 'Principal.class.php';

class Comprador extends Principal{
	private $site;

    /**
     * @return mixed
     */
    public function getSite()
    {
        return $this->site;
    }

    /**
     * @param mixed $site
     *
     * @return self
     */
    public function setSite($site)
    {
        $this->site = $site;

        return $this;
    }
}