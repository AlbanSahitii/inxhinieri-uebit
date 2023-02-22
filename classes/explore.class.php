<?php
class Explore extends Dbh{

    function showMovies($user_id){

        $getMovies =  $this->connect()->prepare("SELECT movie_id,movie_name,movie_photo,movie_cover,movie_description,movie_time,release_date
        FROM movie m
        WHERE m.movie_id NOT IN (
          SELECT w.movie_id
          FROM watchlist w
          WHERE w.user_id = 38
        );");

        if(!$getMovies->execute($user_id)){
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


