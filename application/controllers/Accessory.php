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
class Accessory extends Application {
    //put your code here
           public function index() 
     {
           $this->load->model('Accessory_Model');
           $data = $this->Accessory_Model->all();
           echo("<pre>");
           print_r($data);
           //$this->show('CategoryId');
     }
}
