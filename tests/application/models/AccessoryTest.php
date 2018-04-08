<?php

use PHPUnit\Framework\TestCase;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AccessoryTest
 *
 * @author andraavram
 */
class AccessoryTest extends TestCase{
    //put your code here
    
    private $CI;
    private $Accessory;
    public function setUp()
    {
      // Load CI instance normally
      $this->CI = &get_instance();
      $this->CI->load->model('accessory_model');
      $this->Accessory = new AccessoryEntity();
    }
    
    public function testInvalidId() {
     $this->expectException('InvalidArgumentException');
     $this->Accessory->setAccessoryId(null);
    }
    
    public function testInvalidDescription() {
     $this->expectException('InvalidArgumentException');
     $this->Accessory->setDescription(null);
    }
    
    public function testInvalidCategory() {
     $this->expectException('InvalidArgumentException');
     $this->Accessory->setCategory(null);
    }
    
    public function testCost() {
     $this->expectException('Exception');
     $this->Accessory->setCost(-1);
    }
    
    public function testPopularity() {
     $this->expectException('Exception');
     $this->Accessory->setPopularity(-1);
    }
    
    public function testQuality() {
     $this->expectException('Exception');
     $this->Accessory->setQuality(-1);
    }
   
}
