<?php
class WatchlistToProfile extends Dbh{
    function getMovies($movie_id,$user_id,$watched_status){
        $stmt = $this->connect()->prepare("UPDATE watchlist SET watched_status = ? WHERE movie_id = ? AND user_id = ?
        ");

        if(!$stmt->execute(array($watched_status, $movie_id, $user_id))){
            $stmt = null;
            return false;
            exit();
        }

        return true;

    }



}
?>