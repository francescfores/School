<?php

/**
 * Created by PhpStorm.
 * User: francesc
 * Date: 12/10/15
 * Time: 22:16
 */

class Student extends Person
{
    /**
     * @return mixed
     */
    public function getStudymodule()
    {
        return $this->studymodule;
    }

    /**
     * @param mixed $studymodule
     */
    public function setStudymodule($studymodule)
    {
        $this->studymodule = $studymodule;
    }

    /**
     * @return mixed
     */
    public function getClassgroup()
    {
        return $this->classgroup;
    }

    /**
     * @param mixed $classgroup
     */
    public function setClassgroup($classgroup)
    {
        $this->classgroup = $classgroup;
    }

    /**
     * @return mixed
     */
    public function getFormacio()
    {
        return $this->formacio;
    }

    /**
     * @param mixed $formacio
     */
    public function setFormacio($formacio)
    {
        $this->formacio = $formacio;
    }

    public $studymodule;
    public $classgroup;
    public $formacio;

    public function __construct($cognoms, $dni, $edad, $nom, $ubicacio,$studymodule,$classgroup, $formacio)
    {
        $this->studymodule = $studymodule;
        $this->classgroup = $classgroup;
        $this->formacio = $formacio;
    }

    public function calculaformacio($formacio){
        if($formacio=="true"){
            $this->formacio = "DUAL";
        }else{
            $this->formacio = "Practiques";
        }
    }
}