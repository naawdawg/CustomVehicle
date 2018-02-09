<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Set
 *
 * @author Lucas
 */
class Set extends Application {
           public function index() 
     {
           $this->load->model('Set_Model');
           $data = $this->Set_Model->all();
           $newEntity = new SetEntity();
           $newEntity->SetId = 123;
           $newEntity->Name = "MY NEW Set";
           $this->Set_Model->add($newEntity);
           echo("<pre>");
           print_r($data);
           //$this->show('CategoryId');
     }
}
