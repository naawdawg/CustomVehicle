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
class Info extends Application{
    //put your code here
	public function index()
	{
		echo("This is an App For Accessorizing a car. ");
	}
	// To run type into URL /info/category/(optional category id)
	public function category($key = null)
	{
                $this->load->model('Category_Model');
		$categories = $this->Category_Model->all();
		if($key != null)
		{
                    foreach($categories as $category)
                    {
                        if(!strcasecmp($category->CategoryId, $key))
                        {
                            header("Content-type: application/json");
                            echo json_encode($category);
                        }
                    }
		}
		 else 
                 {
                    header("Content-type: application/json");
                    echo json_encode($categories);
                 }
	}
        // To run type into URL /info/catalog/(optional AccessoryId)
	public function catalog($key = null)
	{
            $this->load->model('Accessory_Model');
            $accessories = $this->Accessory_Model->all();
            if($key != null)
            {
                foreach($accessories as $accessory)
                {
                    if(!strcasecmp($accessory->AccessoryId, $key))
                    {
                        header("Content-type: application/json");
                        echo json_encode($accessory);
                    }
                }
            }
             else 
             {
                header("Content-type: application/json");
                echo json_encode($accessories);
             }
	}
        // To run type into URL /info/catalog/(optional Set id)
	public function bundle($key = null)
	{
            $set = $this->Set_Model->all();
            if($key != null)
            {
                foreach($set as $selectedset)
                {
                    if(!strcasecmp($selectedset->SetId, $key))
                    {
                        header("Content-type: application/json");
                        echo json_encode($selectedset);
                    }
                }
            }
             else 
             {
                header("Content-type: application/json");
                echo json_encode($set);
             }
	}
}
