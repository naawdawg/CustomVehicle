<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Set_Model
 *
 * @author Lucas
 */
require_once 'SetEntity.php';
class Set_Model extends CSV_Model {
       function __construct()
	{
            parent::__construct('../data/Set.csv', 'SetId', 'SetEntity');
        }
}
