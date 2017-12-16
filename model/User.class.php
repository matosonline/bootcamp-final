<?php

/**
 * User object
 */
class User
{
    
    private $id;
    private $username;
    private $firstname;
    private $lastname;
    private $role;
    private $city;
    private $comments;
    
    /**
     * Instanciate an User.
     */
    public function __construct($id, $username, $firstname, $lastname, $role, $city)
    {
        $this->id = $id;
        $this->username = $username;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->role = $role;
        $this->city = $city;
    }
    
    function getId(){
        return $this->id;
    }
    
    function getUsername(){
        return $this->username;
    }
}
?>