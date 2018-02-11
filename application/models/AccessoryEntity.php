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
    public $AccessoryId;
    public $Description;
    public $CategoryId;
    public $Cost;
    public $Popularity;
    public $Quality;
    
    
    public  function getAccessoryId() {
        return $this->AccessoryId;
    }

    public function getDescription() {
        return $this->Description;
    }

    public function getCategory() {
        return $this->CategoryId;
    }

    public function getCost() {
        return $this->Cost;
    }

    public function getPopularity() {
        return $this->Popularity;
    }

    public function getQuality() {
        return $this->Quality;
    }

    public function setAccessoryId($accessoryId) {
        $this->AccessoryId = $accessoryId;
    }

    public function setDescription($description) {
        $this->Description = $description;
    }

    public function setCategory($category) {
        $this->CategoryId = $category;
    }

    public function setCost($cost) {
        $this->Cost = $cost;
    }

    public function setPopularity($popularity) {
        $this->Popularity = $popularity;
    }

    public function setQuality($quality) {
        $this->Quality = $quality;
    }



}
