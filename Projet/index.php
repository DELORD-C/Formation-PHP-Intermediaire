<?php

//Sert à initialiser toutes nos classes
include 'Class/Autoloader.php';
include 'vendor/autoload.php';

//On instancier un controller
$controller = new Controller();

//on lance la méthode start du controller
$controller->start();