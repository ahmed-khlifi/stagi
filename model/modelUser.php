<?php

require_once ("Model.php");

class ModelUser extends Model{

    #attributes
    private $email;
    private $password;
    private $description;
    private $licence;
    private $fac;
    private $role;

    
    protected static $table = 'user';
    protected static $primary = 'email';
    protected static $pass = 'password';

    public function __construct($email = null, $password = null, $description = null, $licence = null, $fac = null, $role = null){

        if(!is_null($email) && !is_null($password) && !is_null($description)) {
            
            $this->email = $email;
            $this->password = $password;
            $this->description = $description;
            $this->licence = $licence;
            $this->fac = $fac;
            $this->role = $role;
            
        }
    }

    #getters

    public function getDescription() {
        return $this->description;
    }

    public function getLicence() {
        return $this->licence;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getFac() {
        return $this->fac;
    }

    public function getRole() {
        return $this->role;
    }

}

?>
