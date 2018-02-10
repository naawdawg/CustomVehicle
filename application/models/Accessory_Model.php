<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Accessory
 *
 * @author Lucas
 */
require_once 'AccessoryEntity.php';
class Accessory_Model extends CSV_Model {
    //put your code here
        
        function __construct()
	{
            parent::__construct('../data/Accessory.csv', 'AccessoryId', 'AccessoryEntity');
        }
    
    
    
    
    
}
