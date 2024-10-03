<?php
// Laad de deur.php bestand
require 'deur.php';

echo " Voorbeeldgebruik Voordeur \n";
$voordeur = new Deur("Voordeur");
$voordeur->sleutelGebruiken("links"); // Ontgrendel de deur
$voordeur->deurOpenen(); // Open de deur
$voordeur->doorDeurLopen(); // Loop door de deur

echo "\n Voorbeeldgebruik Achterdeur \n";
$voordeur2 = new Deur("Achterdeur");
$voordeur2->doorDeurLopen(); // Probeer door de deur te lopen zonder deze te ontgrendelen
$voordeur2->sleutelGebruiken("rechts"); // Vergrendel de deur
$voordeur2->deurOpenen(); // Probeer de deur te openen terwijl deze vergrendeld is
$voordeur2->doorDeurLopen(); // Probeer opnieuw door de deur te lopen
?>
