<?php

class Controller {
    private $renderer;

    function __construct()
    {
        $this->renderer = new Renderer();
    }

    function start() {
        if (isset($_GET['query'])) {
            $this->renderer->displayResults();
        }
        else {
            $this->renderer->displayForm();
        }
    }

    function details () {
        
    }
}