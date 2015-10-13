<?php
require "Person/Person.php";
require "Person/Student.php";
require "Person/Locate.php";
require "Person/Teacher.php";
/**
 * Created by PhpStorm.
 * User: francesc
 * Date: 12/10/15
 * Time: 21:55
 */

$usuari = new Student();
$usuari->setNom( "francesc");
$usuari->setCognoms( "Fores Campos");
$usuari->setDni("47476183c");
$usuari->setClassgroup("2n");
$usuari->calculaformacio("true");

foreach ($usuari as $camp => $valor) {
    echo "$camp : $valor<br>";
}
echo "<br><br>";

$usuari2 = new Teacher();
$usuari2->setNom( "santi");
$usuari2->setCognoms( "Mr.");
$usuari2->setDni("47476183c");
$usuari2->setCarrec("Informatic");
$usuari2->setCapDepartament("Si");

foreach ($usuari2 as $camp => $valor) {
    echo "$camp : $valor<br>";
}