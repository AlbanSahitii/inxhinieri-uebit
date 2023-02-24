<?php
class WatchlistClass extends Dbh{

    function showMovies($user_id){

        $getMovies =  $this->connect()->prepare("SELECT * FROM movie m JOIN watchlist w ON m.movie_id = w.movie_id WHERE w.user_id = ?;
        );");

        if(!$getMovies->execute(array($user_id))){
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


