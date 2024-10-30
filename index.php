<?php
require_once 'deur.php';

$deur = new Deur();

echo $deur->draaiSleutel('rechts') . "<br>";

echo $deur->openDeur() . "<br>";

echo $deur->vergrendelDeur() . "<br>";

echo $deur->openDeur() . "<br>";

echo $deur->draaiSleutel('boven') . "<br>";
?>
