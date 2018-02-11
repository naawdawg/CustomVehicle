<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SetDetail_Model
 *
 * @author andraavram
 */
require_once 'SetDetailEntity.php';
class SetDetail_Model extends CSV_Model {
    //put your code here
    
    function __construct()
	{
            parent::__construct('../data/SetDetail.csv', 'Id', 'SetDetailEntity');
        }
}
