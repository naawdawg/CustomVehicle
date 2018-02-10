<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AccessoryEntity
 *
 * @author Lucas
 */
class AccessoryEntity{ 
    public $accessoryId;
    public $description;
    public $category;
    public $cost;
    public $popularity;
    public $quality;
    
    
    
    public function __construct() {
        
    }

    
    
    
    public  function getAccessoryId() {
        return $this->accessoryId;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getCategory() {
        return $this->category;
    }

    public function getCost() {
        return $this->cost;
    }

    public function getPopularity() {
        return $this->popularity;
    }

    public function getQuality() {
        return $this->quality;
    }

    public function setAccessoryId($accessoryId) {
        $this->accessoryId = $accessoryId;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function setCategory($category) {
        $this->category = $category;
    }

    public function setCost($cost) {
        $this->cost = $cost;
    }

    public function setPopularity($popularity) {
        $this->popularity = $popularity;
    }

    public function setQuality($quality) {
        $this->quality = $quality;
    }



}
