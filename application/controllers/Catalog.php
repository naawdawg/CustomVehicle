<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Catalog
 *
 * @author Lucas
 */
class Catalog extends Application {
       public function index() 
     {
           $this->load->model('Category_Model');
           $data = $this->Category_Model->all();
           $newEntity = new CategoryEntity();
           $newEntity->CategoryId = 123;
           $newEntity->Name = "MY NEW CATEGORY";
           $this->Category_Model->add($newEntity);
           echo("<pre>");
           print_r($data);
           //$this->show('CategoryId');
     }
}
