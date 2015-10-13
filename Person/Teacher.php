<?php

/**
 * Created by PhpStorm.
 * User: francesc
 * Date: 12/10/15
 * Time: 22:17
 */
class Teacher extends Person
{
    /**
     * @return mixed
     */
    public function getCognom()
    {
        return $this->cognom;
    }

    /**
     * @param mixed $cognom
     */
    public function setCognom($cognom)
    {
        $this->cognom = $cognom;
    }

    /**
     * @return mixed
     */
    public function getCapDepartament()
    {
        return $this->capDepartament;
    }

    /**
     * @param mixed $capDepartament
     */
    public function setCapDepartament($capDepartament)
    {
        $this->capDepartament = $capDepartament;
    }

    /**
     * @return mixed
     */
    public function getCarrec()
    {
        return $this->carrec;
    }

    /**
     * @param mixed $carrec
     */
    public function setCarrec($carrec)
    {
        $this->carrec = $carrec;
    }

    /**
     * @return mixed
     */
    public function getEstudisUni()
    {
        return $this->estudisUni;
    }

    /**
     * @param mixed $estudisUni
     */
    public function setEstudisUni($estudisUni)
    {
        $this->estudisUni = $estudisUni;
    }
    public $carrec;
    public $estudisUni;
    public $capDepartament;

    /**
     * Teacher constructor.
     * @param $capDepartament
     * @param $carrec
     * @param $estudisUni
     */
    public function __construct($capDepartament, $carrec, $estudisUni)
    {
        $this->capDepartament = $capDepartament;
        $this->carrec = $carrec;
        $this->estudisUni = $estudisUni;
    }
}