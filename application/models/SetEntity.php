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
class SetEntity extends Entity{
    //put your code here
    public $SetId;
    public $Name;
    
    public function getSetId() {
        return $this->SetId;
    }

    public function getName() {
        return $this->Name;
    }

    public function setSetId($setId) {
        $this->SetId = $setId;
    }

    public function setName($name) {
        $this->Name = $name;
    }


}
