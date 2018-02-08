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
class Category_Model extends CSV_Model {
    //put your code here
    public $categoryarray = array('CategoryId' => 'Rims');
    
    function __construct()
	{
            echo('Hello');
            parent::__construct('../data/Category.csv', 'CategoryId', 'Name');
        }

}
