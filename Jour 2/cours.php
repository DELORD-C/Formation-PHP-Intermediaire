<?php

include 'Class/Autoloader.php';

$client = new Client ('Jean', 'jean@aol.fr', 'azerty123');
$client->direBonjour();
$client->direAuRevoir();

// POLYMORPHISME
// GENERICITE