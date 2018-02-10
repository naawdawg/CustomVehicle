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
require_once 'CategoryEntity.php';
class AccessoryEntity extends CategoryEntity{
//    public $accessoryId;
    public $description;
    public $categoryId;
    
    //put your code here
      function __construct(){
          parent::__construct();
      }
//      public function getAccessoryId() {
//          return $this->accessoryId;
//      }

     public function getDescription() {
          return $this->description;
      }
//
//      public function getCategoryId() {
//          return parent::getCategoryId();
//      }

     public function setAccessoryId($accessoryId) {
          $this->accessoryId = $accessoryId;
      }

     public function setDescription($description) {
          $this->description = $description;
      }

     public function setCategoryId($categoryId) {
          $this->categoryId = $categoryId;
      }


}
