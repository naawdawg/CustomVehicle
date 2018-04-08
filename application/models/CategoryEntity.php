<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CategoryEntity
 *
 * @author andraavram
 */
  class CategoryEntity extends Entity  {
   // put your code here
    public $CategoryId;
    public  $Name;
//
//    
    public function getCategoryId() {
        return $this->CategoryId;
    }

    public function getName() {
        return $this->Name;
    }

    public function setCategoryId($categoryId) {
        $this->CategoryId = $categoryId;
    }

    public function setName($name) {
        $this->Name = $name;
    }

}
