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
  class CategoryEntity  {
   // put your code here
    public $categoryId;
    public  $name;
//
    function __construct(){
          parent::__construct();    
    }
//    
    public function getCategoryId() {
        return $this->categoryId;
    }

    public function getName() {
        return $this->name;
    }

    public function setCategoryId($categoryId) {
        $this->categoryId = $categoryId;
    }

    public function setName($name) {
        $this->name = $name;
    }

}
