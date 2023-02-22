<?php
class exploreToWatchlistController extends exploreToWatchlistClass{
    private $user_id;
    private $movie_id;
    private $watched_status;

    public function __construct($user_id,$movie_id,$watched_status){
        $this->user_id = $user_id;
        $this->movie_id = $movie_id;
        $this->watched_status = $watched_status;
    }

    public function callDatabase(){
        $this->addMovie($this->user_id, $this->movie_id, $this->watched_status);
    }

}

?>