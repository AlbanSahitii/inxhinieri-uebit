<?php
class profile extends Dbh{
    public function showMovies($user_id){

        $getMovies =  $this->connect()->prepare("SELECT m.movie_name,m.movie_photo FROM movie m JOIN watchlist w ON w.movie_id = m.movie_id WHERE w.watched_status = ? AND w.user_id = ?");

        if(!$getMovies->execute(array(1, $user_id))){
            $getMovies = null;
            return false;
            exit();
        }

        
        if($getMovies->rowCount() == 0){
            $getMovies = null;
            return false;
            exit(); 
        }
        $movies = $getMovies->fetchAll(PDO::FETCH_ASSOC);
        return json_encode($movies);
    }


}
?>


