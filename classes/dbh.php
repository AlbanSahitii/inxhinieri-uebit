<?php
class Dbh {
    public function connect(){
        try{
            $username = "root";
            $password = "";
            $dbh = new PDO("mysql:host=localhost;dbname=movietime", $username, $password);
            
            $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            return $dbh;
        } catch(PDOException $e){
            print "Error: " . $e->getMessage() . "<br>";
            die();
        }
    }
}

?>