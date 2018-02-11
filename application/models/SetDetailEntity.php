<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SetDetailEntity
 *
 * @author andraavram
 */
class SetDetailEntity {
    //put your code here
    
    public $Id;
    public $SetId;
    public $AccessoryId;
    
    function getId() {
        return $this->Id;
    }

    function getSetId() {
        return $this->SetId;
    }

    function getAccessoryId() {
        return $this->AccessoryId;
    }

    function setId($Id) {
        $this->Id = $Id;
    }

    function setSetId($SetId) {
        $this->SetId = $SetId;
    }

    function setAccessoryId($AccessoryId) {
        $this->AccessoryId = $AccessoryId;
    }


}
