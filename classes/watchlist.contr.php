<?php
class WatchlistContr extends WatchlistClass {
    private $user_id;
    
    public function __construct($user_id){
        $this->user_id = $user_id;
    }


    function getMovies(){
        return $this->showMovies($this->user_id);
    }
 
}


?>
