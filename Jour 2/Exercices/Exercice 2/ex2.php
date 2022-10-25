<?php

include 'Class/Article.php';
include 'Class/Client.php';

$date = new DateTime();

$client = new Client ('Jean', 'jean@aol.fr', 'azerty123');
$article = new Article(
    'Ceci est un super article',
    'Mon premier article',
    $date,
    $client
);
var_dump($article->getClient());