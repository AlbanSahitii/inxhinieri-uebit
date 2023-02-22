<?php
class exploreToWatchlistClass extends Dbh {
    protected function addMovie($user_id, $movie_id,$watched_status){
        $getWatchlistInfo = $this->connect()->prepare('SELECT * FROM watchlist WHERE user_id = ? AND movie_id = ?');
        $getWatchlistInfo->execute(array($user_id,$movie_id));
        if(!$getWatchlistInfo){
            $getWatchlistInfo = null;
            return false;
            exit();
        } else if($getWatchlistInfo->rowCount() == 0){

            $insertMovie =  $this->connect()->prepare('INSERT INTO watchlist (user_id, movie_id, watched_status) VALUES (?,?,?)');

            if(!$insertMovie->execute(array($user_id,$movie_id,$watched_status))){
                $insertMovie = null;
                return false;
                exit();
            }
        
        $insertMovie = null;
        return false;
        
        }
    }
}


?>