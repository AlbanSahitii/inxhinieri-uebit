<?php

class MoviePageContr extends MoviePage {
    private $movie_id;

    public function __construct($movie_id){
        $this->movie_id = $movie_id;
    }

    function getMovies(){
        return $this->showMovies($this->movie_id);
    }
}


?>