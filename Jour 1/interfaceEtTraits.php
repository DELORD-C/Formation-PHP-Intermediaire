<?php

use Animaux\Jaguar as AJaguar;
use Vehicules\Jaguar as VJaguar;

include 'Class/Autoloader.php';

$jaguar = new AJaguar();
$jaguar = new VJaguar("Jaguar", 150000, 'V8', 3);