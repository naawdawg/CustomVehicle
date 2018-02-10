<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Category_Model
 *
 * @author Lucas
 */
require_once 'CategoryEntity.php';
class Category_Model extends CSV_Model {
    //put your code here
    public $CategoryId;
    public $Name;
    
    function __construct()
    {
        parent::__construct('../data/Category.csv', 'CategoryId','CategoryEntity');
    }

}
