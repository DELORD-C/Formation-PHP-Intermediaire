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
            $film->overview = substr($film->overview, 0, 150) . "...";
            $filmshtml .= "
                <a href='details.php?id=$film->id' class='card mb-3' style='width: 540px; height: 265px;'>
                    <div class='row g-0'>
                        <div class='col-md-4'>
                        <img style='width: 100%; height: 100%; object-fit: cover' src='https://image.tmdb.org/t/p/w500$film->poster_path' class='img-fluid rounded-start' alt='poster'>
                        </div>
                        <div class='col-md-8'>
                        <div class='card-body'>
                            <h5 class='card-title'>$film->original_title</h5>
                            <p class='card-text' style='text-overflow: ellipsis;'>$film->overview</p>
                            <p class='card-text'><small class='text-muted'>$date</small></p>
                        </div>
                        </div>
                    </div>
                </a>
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
        <div class='col-auto'>
            <img class='w-100' src='https://image.tmdb.org/t/p/w500$film->poster_path'>
        </div>
        <div class='col'>
            <table class='table'>
                <tr>
                    <td>Titre</td>
                    <td>$film->original_title</td>
                </tr>
                <tr>
                    <td>Résumé</td>
                    <td>$film->overview</td>
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
            </table>
        </div>
        
        ";
    }
}