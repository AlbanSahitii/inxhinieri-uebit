<?php
class WatchlistToProfileContr extends WatchlistToProfile{
    private $movie_id;
    private $user_id;
    private $watched_status;

    public function __construct($movie_id,$user_id,$watched_status){
        $this->movie_id = $movie_id;
        $this->user_id = $user_id;
        $this->watched_status = $watched_status;
    }

    function sendInfo(){
        return $this->getMovies($this->movie_id, $this->user_id, $this->watched_status);
    }

}


?>