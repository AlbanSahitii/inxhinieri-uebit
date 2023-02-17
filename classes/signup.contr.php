<?php

class SignUpController extends SignUp{
    private $username;
    private $email;
    private $name;
    private $password;
    private $confirmPassword;

    public function __construct($username,$email,$name,$password,$confirmPassword){
        $this->username = $username;
        $this->email = $email;
        $this->name = $name;
        $this->password = $password;
        $this->confirmPassword = $confirmPassword;
    }

    public function signUpUser(){
        if($this->emptyInput() == false){
            // ECHO ERROR 
            return false;
            exit();
        }
        if($this->invalidName() == false){
            // ECHO ERROR 
            return false;
            exit();
        }
        
        if($this->invalidEmail() == false){
            // ECHO ERROR 
            return false;
            exit();
        }
        
        if($this->invalidUsername() == false){
            // ECHO ERROR 
            return false;
            exit();
        }

        if($this->passwordMatch() == false){
            // ECHO ERROR 
            return false;
            exit();
        }

        if($this->userTaken() == false){
            // ECHO ERROR 
            return false;
            exit();
        }

        $this->setUser($this->email, $this->password, $this->username, $this->name);

    }


    private function emptyInput(){
        if(empty($this->username) || empty($this->email) || empty($this->name) || empty($this->password) || empty($this->confirmPassword)){
            return false;
        } 
        return true;
    }
    
    private function invalidName(){
        if(preg_match("/^[a-zA-Z]*$/", $this->name)){
            return true;
        }
        return false;    
    }
    
    private function invalidEmail(){
        if(preg_match('/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
        ', $this->email)){
            return true;
        }
        return false; 

    }

    private function invalidUsername(){
        if(preg_match("/^[a-zA-Z0-9]*$/", $this->username)){
            return true;
        }
        return false;
    }

    private function passwordMatch(){
        if($this->password === $this->confirmPassword){
            return true;
        }
        return false;

    }

    private function userTaken(){
        if($this->checkUser($this->username, $this->email)){
            return true;
        }
        return false;
    }
}
?>