<?php
class ContactUsContr extends contactUs {
    private $email;
    private $subject;

    public function __construct($email,$subject){
        $this->email = $email;
        $this->subject = $subject;
    }

    public function contactUs(){
        if($this->invalidEmail() == false){
            header("Location: ../contact.php?failed");
            return false;
        }

        $this->setContactUs($this->email,$this->subject);
    }

    private function invalidEmail(){
        if(preg_match('/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
        ', $this->email)){
            return true;
        }
        return false; 

    }
}

?>