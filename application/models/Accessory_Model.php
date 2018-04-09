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
        
    public function rules()
        {
        $config = array(
            ['field' => 'description', 'label' => 'Description', 'rules' => 'alpha_numeric_spaces|max_length[64]'],
            ['field' => 'cost', 'label' => 'Cost', 'rules' => 'integer|less_than[11]'],
            ['field' => 'popularity', 'label' => 'Popularity', 'rules' => 'integer|less_than[11]'],
            ['field' => 'quality', 'label' => 'Quality', 'rules' => 'integer|less_than[11]'],
        );
             return $config;
        }
}
