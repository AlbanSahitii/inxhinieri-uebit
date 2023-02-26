<?php
class MoviePage extends Dbh{
    function showMovies($movie_id){
        $getMovies =  $this->connect()->prepare("SELECT * FROM movie WHERE movie_id = ?;");

        if(!$getMovies->execute(array($movie_id))){
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