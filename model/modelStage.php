<?php

require_once ("Model.php");

class ModelStage extends Model{

    #attributes
    private $name;
    private $email;
    private $phone;
    private $location;
    private $field;
    private $description;

    
    protected static $table = 'stage';
    protected static $primary = 'email';

    public function __construct($name = null, $email = null, $phone = null, $location = null,  $field = null, $description = null){

        if(!is_null($email) && !is_null($phone) && !is_null($description)) {
            
            $this->name = $name;
            $this->email = $email;
            $this->phone = $phone;
            $this->location = $location;
            $this->field = $field;
            $this->description = $description;
            
        }
    }

    #getters
    
    public function getName() {
        return $this->name;
    }
    public function getEmail() {
        return $this->email;
    }
    public function getPhone() {
        return $this->phone;
    }
    public function getLocation() {
        return $this->location;
    }
    public function getField() {
        return $this->field;
    }
    public function getDescription() {
        return $this->description;
    }


}

?>
