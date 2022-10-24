<?php

include "Class/Autoloader.php";

$voiture = new Voiture("Ferrari", 250000, "V12", 4);
$commercial = new Commercial("Georges");

$commercial->vendreVoiture($voiture);

$Rep = new RepertoireUtilisateurs(new Mailer());