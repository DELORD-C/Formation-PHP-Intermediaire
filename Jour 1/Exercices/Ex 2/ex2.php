<?php

include 'Class/Autoloader.php';

$guerrier = new Guerrier("Jean", 100, 10);
$mage = new Mage("Gandalf", 50, 15);
$voleur = new Voleur("Bil", 15, 5);

$mage->attaque($voleur);