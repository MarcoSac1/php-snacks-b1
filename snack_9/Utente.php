<?php

class User{

    private $name;
    private $username;
    private $email;

    public function __construct($name, $username, $email){
        $this -> name = $name;
        $this -> username = $username;
        $this -> email = $email;
        
    }
    
    public function getDiscount(){
        return 0;
    }
}

?>