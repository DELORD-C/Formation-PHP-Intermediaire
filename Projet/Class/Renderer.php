<?php

class Renderer {
    private $api;

    function __construct()
    {
        $this->api = new API();
    }

    function displayForm() {
        $template = file_get_contents(__DIR__ . '/../Templates/form.html');
        echo $template;
    }

    function displayResults() {
        $films = $this->api->getFilms();
        $template = file_get_contents(__DIR__ . '/../Templates/results.html');
        $filmshtml = '';
        foreach ($films as $film) {
            if (isset($film->release_date)) {
                $date = $film->release_date;
            }
            else {
                $date = 'Inconnue';
            }
            $filmshtml .= "
                <tr>
                    <td>$film->original_title</td>
                    <td>$film->poster_path</td>
                    <td>$date</td>
                    <td>$film->overview</td>
                </tr>
            ";
        }
        echo str_replace('{{FILMS}}', $filmshtml, $template);
    }
}