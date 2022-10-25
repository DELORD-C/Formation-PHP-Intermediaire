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
                    <td><img src='https://image.tmdb.org/t/p/w500$film->poster_path'></td>
                    <td>$date</td>
                    <td>$film->overview</td>
                    <td><a href='details.php?id=$film->id'>Voir</a></td>
                </tr>
            ";
        }
        return $filmshtml;
    }
}