<?php

class API {
    function getFilms() {
        $json = file_get_contents('https://api.themoviedb.org/3/search/movie?api_key=625b3e1220c0fca7c7ac7f6fcca786ac&language=fr-FR&page=1&query=' . $_GET['query']);
        $response = json_decode($json);
        $filmList = $response->results;
        return $filmList;
    }
}