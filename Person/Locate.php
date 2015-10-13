<?php

/**
 * Created by PhpStorm.
 * User: francesc
 * Date: 13/10/15
 * Time: 0:12
 */
class Locate
{
    /**
     * @return mixed
     */
    public function getCarre()
    {
        return $this->carre;
    }

    /**
     * @param mixed $carre
     */
    public function setCarre($carre)
    {
        $this->carre = $carre;
    }

    /**
     * @return mixed
     */
    public function getCiutat()
    {
        return $this->ciutat;
    }

    /**
     * @param mixed $ciutat
     */
    public function setCiutat($ciutat)
    {
        $this->ciutat = $ciutat;
    }
    public $ciutat;
    public $carre;

    /**
     * Locate constructor.
     * @param $carre
     * @param $ciutat
     */
    public function __construct($carre, $ciutat)
    {
        $this->carre = $carre;
        $this->ciutat = $ciutat;
    }
    /** mas atributos aquí **/


}