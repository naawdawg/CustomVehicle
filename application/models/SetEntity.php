<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SetEntity
 *
 * @author Lucas
 */
class SetEntity{
    //put your code here
    public $setId;
    public $name;
    
    public function __construct() {
        
    }

    public function getSetId() {
        return $this->setId;
    }

    public function getName() {
        return $this->name;
    }

    public function setSetId($setId) {
        $this->setId = $setId;
    }

    public function setName($name) {
        $this->name = $name;
    }


}
