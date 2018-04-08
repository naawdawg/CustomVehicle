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
class AccessoryEntity extends Entity{ 
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
        
        if (empty($accessoryId))
        {
            throw new InvalidArgumentException('Cannot be empty.');
        }
        
        $this->AccessoryId = $accessoryId;
    }

    public function setDescription($description) {
        if (empty($description))
        {
            throw new InvalidArgumentException('Cannot be empty.');
        }
        $this->Description = $description;
    }

    public function setCategory($category) {
        if (empty($category))
        {
            throw new InvalidArgumentException('Cannot be empty.');
        }
        $this->CategoryId = $category;
    }

    public function setCost($cost) {
        
        if (empty($cost))
        {
            throw new InvalidArgumentException('Cannot be empty.');
        }
        
        if($cost <1 || $cost>10)
            throw new Exception('Cost range must be between 1 and 10');   
        
        $this->Cost = $cost;
    }

    public function setPopularity($popularity) {
        
        if (empty($popularity))
        {
            throw new InvalidArgumentException('Cannot be empty.');
        }
        
        if($popularity <1 || $popularity >10)
            throw new Exception('Popularity range must be between 1 and 10');  
        
        $this->Popularity = $popularity;
    }

    public function setQuality($quality) {
        
        if (empty($quality))
        {
            throw new InvalidArgumentException('Cannot be empty.');
        }
        
        if($quality <1 || $quality >10)
            throw new Exception('Quality range must be between 1 and 10');  
        
        $this->Quality = $quality;
    }



}
