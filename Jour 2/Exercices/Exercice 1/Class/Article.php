<?php

class Article {
    protected $contenu;
    protected $sujet;
    protected $dateCreation;
    protected $client;

    function __construct(String $contenu, String $sujet, DateTime $dateCreation, Client $client)
    {
        $this->contenu = $contenu;
        $this->sujet = $sujet;
        $this->dateCreation = $dateCreation;
        $this->client = $client;
    }

    function getClient(): Client
    {
        return $this->client;
    }
}