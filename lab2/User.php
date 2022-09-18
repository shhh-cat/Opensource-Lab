<?php
require_once ("Helper.php");
class User {
    private $username;
    private $email;
    private $id;
    private $status;
    public function __construct($username, $email)
    {
        $this->username = $username;
        $this->email = $email;
        $this->id = getNextID();
        $this->status = 1;
    }

    public function __destruct()
    {
        $this->username = null;
        $this->email = null;
        $this->id = null;
        $this->status = null;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function getEmail()
    {
        return $this->email;
    }
    
    public function getStatus()
    {
        return $this->status;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setStatus($input) {
        if ($input > 1 || $input < 0)
            return false;
        $this->status = $input;
        return true;
    }
}