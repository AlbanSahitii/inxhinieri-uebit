<?php

class LoginContr extends Login{
    private $email;
    private $password;

    
    public function __construct($email, $password){
        $this->email = $email;
        $this->password = $password;
    }

    public function logInUser(){
        if($this->emptyInput() == false){
            // ECHO ERROR 
            return false;
        }
        
        return $this->getUser($this->email, $this->password);
    }


    private function emptyInput(){
        if( empty($this->email) || empty($this->password)){
            return false;
        } 
        return true;
    }
}

?>