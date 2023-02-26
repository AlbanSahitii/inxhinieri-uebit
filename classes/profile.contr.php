<?php

class ProfileController extends profile{
    private $user_id;

    function __construct($user_id){

        $this->user_id = $user_id;
    }

    function getMovies(){
        return $this->showMovies($this->user_id);

    }
}

?>