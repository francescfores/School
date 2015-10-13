<?php

/**
 * Created by PhpStorm.
 * User: francesc
 * Date: 12/10/15
 * Time: 22:18
 */
class Person
{



    public $nom;
    public $cognoms;
    public $dni;
    public $edad;
    public $ubicacio;

    /**
     * Person constructor.
     * @param $cognom
     * @param $dni
     * @param $edad
     * @param $nom
     * @param $ubicacio
     */
     public function __construct($cognoms, $dni, $edad, $nom, $ubicacio)
    {
        $this->cognom = $cognoms;
        $this->dni = $dni;
        $this->edad = $edad;
        $this->nom = $nom;
        $this->ubicacio = $ubicacio;
    }

    /**
     * @return mixed
     */
    public function getCognoms()
    {
        return $this->cognoms;
    }

    /**
     * @param mixed $cognoms
     */
    public function setCognoms($cognoms)
    {
        $this->cognoms = $cognoms;
    }

    /**
     * @return mixed
     */
    public function getDni()
    {
        return $this->dni;
    }

    /**
     * @param mixed $dni
     */
    public function setDni($dni)
    {
        $this->dni = $dni;
    }

    /**
     * @return mixed
     */
    public function getEdad()
    {
        return $this->edad;
    }

    /**
     * @param mixed $edad
     */
    public function setEdad($edad)
    {
        $this->edad = $edad;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getUbicacio()
    {
        return $this->ubicacio;
    }

    /**
     * @param mixed $ubicacio
     */
    public function setUbicacio($ubicacio)
    {
        $this->ubicacio = $ubicacio;
    }


}

