<?php

include "Class/Autoloader.php";

$avion = new Avion('A380', 5, 2, 'Airbus');
$bateau = new Bateau('Charles de Gaule', 10, 5, 'Porte-Avion');
$helicoptère = new Helicoptere('Apache', 10, 5, 'Apache');
$moto = new Moto('Suzuki', 100, 55, 'Suzuki');
$Voiture = new Voiture('Megane', 100, 55, 'Renault', 5);

echo $avion->crash();
$avion->accelerer();
$avion->accelerer();
$avion->accelerer();
$avion->accelerer();
echo $avion->getVitesse();

echo $bateau->coule();

echo $helicoptère->crash();

$moto->accelerer();
echo $moto->wheeling();

$Voiture->accelerer();