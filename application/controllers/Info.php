<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Info
 *
 * @author Lucas
 */
class Info extends Application {

    //put your code here
    public function index() {
        echo("This is an App For Accessorizing a car. ");
    }

    // To run type into URL /info/category/(optional category id)
    public function category($key = null) {
        header("Content-type: application/json");
        echo $this->getResourceAsJson("Category_Model", $key);
    }
    
    private function getResourceAsJson($model,$key = null) {
        $this->load->model($model);
        if ($key != null) {
            // Specific to ../info/bundleDetials/(SetId)
            if ($model == "SetDetail_Model") {
                $entity = $this->$model->some("SetId",$key);
                return json_encode($entity);
            } else {
                $entity = $this->$model->get($key);
                return json_encode($entity);
            }
        } else {
            $entities = $this->$model->all();
            return json_encode($entities);
        }        
    }

        // To run type into URL /info/catalog/(optional AccessoryId)
    public function catalog($key = null) {
        header("Content-type: application/json");
        echo $this->getResourceAsJson("Accessory_Model", $key);
    }

    // To run type into URL /info/catalog/(optional Set id)
    public function bundle($key = null) {
        header("Content-type: application/json");
        echo $this->getResourceAsJson("Set_Model", $key);
    }
    
    public function bundleDetail($key = null) {
        header("Content-type: application/json");
        echo $this->getResourceAsJson("SetDetail_Model", $key);
    }

}
