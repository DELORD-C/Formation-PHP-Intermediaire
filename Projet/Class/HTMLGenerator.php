<?php

class HTMLGenerator {
    function generateFilmList (Array $films) {
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
        return $filmshtml;
    }
}