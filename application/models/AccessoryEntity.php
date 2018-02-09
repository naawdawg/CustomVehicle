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
    public $accessoryId;
    public $description;
    public $categoryId;


    //put your code here
      function __construct(){
          parent::__construct();
      }
}
