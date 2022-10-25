<?php

class Renderer {
    private $api;
    private $htmlGenerator;

    function __construct()
    {
        $this->api = new API();
        $this->htmlGenerator = new HTMLGenerator();
    }

    function displayForm() {
        $template = file_get_contents(__DIR__ . '/../Templates/form.html');
        echo $template;
    }

    function displayResults() {
        $films = $this->api->getFilms();
        $template = file_get_contents(__DIR__ . '/../Templates/results.html');
        $filmsList = $this->htmlGenerator->generateFilmList($films);
        echo str_replace('{{FILMS}}', $filmsList, $template);
    }
}