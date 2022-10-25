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

    function generateFilmDetails ($film) {
        if (isset($film->release_date)) {
            $date = $film->release_date;
        }
        else {
            $date = 'Inconnue';
        }
        return "
        <tr>
            <td>Titre</td>
            <td>$film->original_title</td>
        </tr>
        <tr>
            <td>Résumé</td>
            <td>$film->overview</td>
        </tr>
        <tr>
            <td>Image</td>
            <td><img src='https://image.tmdb.org/t/p/w500$film->poster_path'></td>
        </tr>
        <tr>
            <td>Note moyenne</td>
            <td>$film->vote_average</td>
        </tr>
        <tr>
            <td>Nombre de votes</td>
            <td>$film->vote_count</td>
        </tr>
        <tr>
            <td>Date de parution</td>
            <td>$date</td>
        </tr>
        ";
    }
}