<?php

class Controller {
    private $renderer;

    function __construct()
    {
        //On stocke un objet renderer dans l'attribut renderer pour pouvoir y accéder facilement
        $this->renderer = new Renderer();
    }

    function start() {
        // Si il y a un paramètre 'query' en GET
        if (isset($_GET['query']) && $_GET['query'] != '') {
            // On appelle la méthode displayResults du renderer
            $this->renderer->displayResults();
        }
        // Sinon
        else {
            // On appelle la méthode displayForm du renderer
            $this->renderer->displayForm();
        }
    }

    function details () {
        if (isset($_GET['id'])) {
            $this->renderer->displayDetails();
        }
        else {
            header('location: index.php');
        }
    }
}